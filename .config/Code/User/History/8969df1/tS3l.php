<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecteurController extends AbstractController
{
    #[Route('/secteur', name: 'app_secteur')]
    public function index(): Response
    {
        return $this->render('secteur/index.html.twig', [
            'controller_name' => 'SecteurController',
        ]);
    }


    public function ajoutSecteur(): Response
    {

        $secteur = new Secteur();
        $visiteur->setNom('Aggoune');
        $visiteur->setPrenom('Idris');
        $visiteur->setAdresse('129 rue Houdan');
        $visiteur->setCp('92330');
        $visiteur->setVille('Sceaux');
        $visiteur->setTel('06.10.03.56.25');
        $em = $this->getDoctrine()->getManager();
        $em->persist($visiteur);
        $em->flush();
        return $this->render('secteur/index.html.twig', [
            'controller_name' => 'SecteurController',
        ]);
    }
    
}
