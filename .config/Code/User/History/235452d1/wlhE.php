<?php

namespace App\Controller;
use App\Entity\Visiteur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VisiteurController extends AbstractController
{
    #[Route('/visiteur', name: 'app_visiteur')]
    public function index(): Response
    {
        $visiteur = new Visiteur();
        $visiteur->setNom('Aggoune');
        $visiteur->setPrenom('Idris');
        $visiteur->setAdresse('129 rue Houdan');
        $visiteur->setCp('92330');
        $visiteur->setVille('Sceaux');
        $visiteur->setTel('06.10.03.56.25');
        $em = $this->getDoctrine()->getManager();
        $em->persist($visiteur);
        $em->flush();

        return $this->render('visiteur/index.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }


    public function addVis(): Response
    {
        $visiteur = new Visiteur();
        $visiteur->setNom('Benjedou');
        $visiteur->setPrenom('Abdel');
        $visiteur->setAdresse('quelquepart dans le 77');
        $visiteur->setCp('77000');
        $visiteur->setVille('SceaTorcyux');
        $visiteur->setTel('06.06.06.06.06');
        $em = $this->getDoctrine()->getManager();
        $em->persist($visiteur);
        $em->flush();
        return $this->render('visiteur/index.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }


public function getVisiteurByVille($visit)
{
    $rp = $this->getDoctrine()->getRepository(Visiteur::class);
    $visiteurs = $rp->findByVille($visit);

    return $this->render('visiteur/findVille.html.twig',[
        'visiteurs' => $visiteurs,
    ]);
}

public function getVisiteurByPrenomAndNum($visit)
{
    $rp = $this->getDoctrine()->getRepository(Visiteur::class);
    $visiteurs = $rp->findByPrenomAndNum($visit);

    return $this->render('visiteur/findVille.html.twig',[
        'visiteurs' => $visiteurs,
    ]);
}
    
}
