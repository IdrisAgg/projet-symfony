<?php

namespace App\Controller;
use App\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class zold_AccueilController extends AbstractController
{
    public function index($profil,$annee): Response
    {
        
        return $this->render('zold_AccueilController/index.html.twig', [
            'controller_name' => 'zold_AccueilController',
            'leprofil'=>$profil,
            'uneannee'=>$annee
        ]);
    }

    public function newClient(): Response
    {
        $client = new Client();
        $client->setNom('Agg'); 
        $client->setPrenom('Idris');
        $em = $this->getDoctrine()->getManager();
        $em->persist($client);
        $em->flush();
        return $this->render('default/index.html.twig',[
            'controller_name'=>'DefaultController',
         ]);
    }

    public function yo(): Response
    {
        
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
}
