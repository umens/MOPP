<?php

namespace Spartak\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjetController extends Controller
{
    public function indexAction()
    {
        return $this->render('SpartakProjetBundle:Projet:index.html.twig', array('name' => $this->getUser()->getUsername()));
    }
}
