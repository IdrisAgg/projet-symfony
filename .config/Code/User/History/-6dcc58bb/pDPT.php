<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MedicamentController extends AbstractController
{
    #[Route('/medicament', name: 'app_medicament')]
    public function index(): Response
    {
        $medoc = new Medicament();
        $client->setNom('Agg'); 
        $client->setPrenom('Idris');
        $em = $this->getDoctrine()->getManager();
        $em->persist($client);
        $em->flush();
        return $this->render('medicament/index.html.twig', [
            'controller_name' => 'MedicamentController',
        ]);
    }
}
