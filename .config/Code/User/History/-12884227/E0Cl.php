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
            'idris'=>$idris,
            'mamhoudou'=>$mamhoudou,
            'abdel'=>$abdel,
            'francis'=>$francis,
            'wahib'=>$wahib,
            'axil'=>$axil,
            'Marzouk'=>$Marzouk
        ];
        
        return $this->render('liste/index.html.twig', [
            'controller_name' => 'ListeController',
    
        ]);
    }
}
