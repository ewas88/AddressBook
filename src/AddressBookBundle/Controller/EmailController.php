<?php

namespace AddressBookBundle\Controller;

use AddressBookBundle\Entity\Email;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class EmailController extends Controller
{
    /**
     * @Route("/{id}/addEmail")
     * @Template("AddressBookBundle:Email:add.html.twig")
     * @Method("GET")
     */
    public function addEmailAction($id)
    {
        $personRepository = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
        $person = $personRepository->find($id);
        return ['person' => $person];
    }

    /**
     * @Route("/{id}/addEmail")
     * @Template("AddressBookBundle:Person:modify.html.twig")
     * @Method("POST")
     */
    public function addEmailDBAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $address = $request->request->get('email_address');
        $type = $request->request->get('type');

        $email = new Email();
        $email->setEmailAddress($address);
        $email->setEmailType($type);

        $em->persist($email);
        $em->flush();

        $personRepository = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
        $person = $personRepository->find($id);

        $person->setEmail($email);

        $em->persist($person);
        $em->flush();

        return ['person' => $person];

    }
}
