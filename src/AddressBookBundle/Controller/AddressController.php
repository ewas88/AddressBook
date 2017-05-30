<?php

namespace AddressBookBundle\Controller;

use AddressBookBundle\Entity\Address;
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
class AddressController extends Controller
{
    /**
     * @Route("/{id}/addAddress")
     * @Template("AddressBookBundle:Address:add.html.twig")
     * @Method("GET")
     */
    public function addAddressAction($id)
    {
        $personRepository = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
        $person = $personRepository->find($id);
        return ['person' => $person];
    }

    /**
     * @Route("/{id}/addAddress")
     * @Template("AddressBookBundle:Person:modify.html.twig")
     * @Method("POST")
     */
    public function addAddressDBAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $city = $request->request->get('city');
        $street = $request->request->get('street');
        $houseNumber = $request->request->get('house_number');
        $flatNumber = $request->request->get('flat_number');

        $address = new Address();
        $address->setCity($city);
        $address->setStreet($street);
        $address->setHouseNumber($houseNumber);
        $address->setFlatNumber($flatNumber);

        $em->persist($address);
        $em->flush();

        $personRepository = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
        $person = $personRepository->find($id);

        $person->setAddress($address);

        $em->persist($person);
        $em->flush();

        return ['person' => $person];

    }
}
