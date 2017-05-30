<?php

namespace AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MainController extends Controller
{
    /**
     * @Route("/", name="main")
     */
    public function mainAction()
    {
        return $this->render('@AddressBook/Main/base.html.twig', array(
        ));
    }
}
