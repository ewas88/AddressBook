<?php

namespace AddressBookBundle\Controller;

use AddressBookBundle\Entity\Person;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("/book")
 * @Security("is_granted('ROLE_USER')")
 */
class PersonController extends Controller
{
    /**
     * @Route("/new")
     * @Template("AddressBookBundle:Person:add.html.twig")
     * @Method("GET")
     */
    public function newPersonAction()
    {
        return [];
    }

    /**
     * @Route("/new")
     * @Template("AddressBookBundle:Person:showOne.html.twig")
     * @Method("POST")
     */
    public function addPersonAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $name = $request->request->get('name');
        $surname = $request->request->get('surname');
        $description = $request->request->get('description');

        $person = new Person();
        $person->setName($name);
        $person->setSurname($surname);
        $person->setDescription($description);
        $person->setUser($this->getUser());

        $em->persist($person);
        $em->flush();

        return ['person' => $person];

    }


    /**
     * @Route("/{id}/modify")
     * @Template("AddressBookBundle:Person:modify.html.twig")
     * @Method("GET")
     */
    public function editPersonAction($id)
    {
        $personRepository = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
        $person = $personRepository->find($id);
        return ['person' => $person];
    }

    /**
     * @Route("/{id}/modify")
     * @Template("AddressBookBundle:Person:showOne.html.twig")
     * @Method("POST")
     */
    public function modifyPersonAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $name = $request->request->get('name');
        $surname = $request->request->get('surname');
        $description = $request->request->get('description');

        $personRepository = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
        $person = $personRepository->find($id);

        $person->setName($name);
        $person->setSurname($surname);
        $person->setDescription($description);

        $em->persist($person);
        $em->flush();

        return ['person' => $person];
    }

    /**
     * @Route("/{id}/delete")
     * @Template("AddressBookBundle:Person:showAll.html.twig")
     * @Method("GET")
     */
    public function deletePersonAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $personRepository = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
        $person = $personRepository->find($id);
        if (!$person) {
            throw new NotFoundHttpException('There is no such person');
        }

        $em->remove($person);
        $em->flush();

        $persons = $personRepository->findAll();

        if (!$persons) {
            $persons = [];
        }

        return ['persons' => $persons];
    }

    /**
     * @Route("/{id}")
     * @Template("AddressBookBundle:Person:showOne.html.twig")
     * @Method("GET")
     */
    public function showPersonAction($id)
    {
        $personRepository = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
        $person = $personRepository->find($id);

        if (!$person) {
            throw new NotFoundHttpException('There is no person with id ' . $id);
        }

        return ['person' => $person];
    }

    /**
     * @Route("/")
     * @Template("AddressBookBundle:Person:showAll.html.twig")
     * @Method("GET")
     */
    public function showAllPeopleAction()
    {

        /** @var PersonRepository $personRepository */
        $personRepository = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
        $persons = $personRepository->findByUser($this->getUser()->getId());

        if (!$persons) {
            $persons = [];
        }

        return ['persons' => $persons];
    }
}
