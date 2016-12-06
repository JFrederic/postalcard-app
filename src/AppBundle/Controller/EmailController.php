<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Entity\Carte;


class EmailController extends Controller
{

    /**
     * @Route("/email/envoi")
     */
    public function EnvoiAction($id , Request $request)
    {
      
    }

    /**
     * @Route("/email/list")
     */
    public function ListEmailAction()
    {
        return $this->render('Email/list_email.html.twig', array(
        ));
    }

}
