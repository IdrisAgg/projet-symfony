<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListeController extends AbstractController
{
    //#[Route('/liste', name: 'app_liste')]
    public function LaListe(): Response
    {
       
        $tabNom = [
            'idris',
            'mamhoudou',
            'abdel',
            'francis',
            'wahib',
            'axil',
            'Marzouk',
        ];

        return $this->render('liste/index.html.twig', [
            'eleves'=>$tabNom,
    
        ]);
    }
}
