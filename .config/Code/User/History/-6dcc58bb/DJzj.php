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
        $medoc->setDepotLegal('Depot-5'); 
        $medoc->setNomCommercial('amoxicilline');
        $medoc->setCode('123456');
        $medoc->setComposition('excipient,principes actifs');
        $medoc->setEffetsIndesirable('Aucun');
        $medoc->setContreIndication('pas de conduite pendant 3 jours');
        $medoc->setNomCommercial('amoxicilline');
        $medoc->setNomCommercial('amoxicilline');

        $em = $this->getDoctrine()->getManager();
        $em->persist($client);
        $em->flush();
        return $this->render('medicament/index.html.twig', [
            'controller_name' => 'MedicamentController',
        ]);
    }
}
