<?php

namespace AddressBookBundle\Controller;

use AddressBookBundle\Entity\Phone;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PhoneController extends Controller
{
    /**
     * @Route("/{id}/addPhone")
     * @Template("AddressBookBundle:Phone:add.html.twig")
     * @Method("GET")
     */
    public function addPhoneAction($id)
    {
        $personRepository = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
        $person = $personRepository->find($id);
        return ['person' => $person];
    }

    /**
     * @Route("/{id}/addPhone")
     * @Template("AddressBookBundle:Person:modify.html.twig")
     * @Method("POST")
     */
    public function addPhoneDBAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $number = $request->request->get('phone_number');
        $type = $request->request->get('type');

        $phone = new Phone();
        $phone->setNumber($number);
        $phone->setType($type);

        $em->persist($phone);
        $em->flush();

        $personRepository = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
        $person = $personRepository->find($id);

        $person->setPhone($phone);

        $em->persist($person);
        $em->flush();

        return ['person' => $person];

    }
}
