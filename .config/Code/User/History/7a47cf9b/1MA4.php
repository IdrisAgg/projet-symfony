<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiseType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;


class ConnexionController extends AbstractController
{
    #[Route('/connexion', name: 'app_connexion')]
    public function index(): Response
    {
        return $this->render('connexion/index.html.twig', [
            'controller_name' => 'ConnexionController',
        ]);
    }

    public function formToConnect()
    {

        $form = $this->createFormBuilder()
                    ->add('login',TextType::class)
                    ->add('motDePasse', PasswordType::class)
                    ->add('Valider',SubmitType::class)
                    ->add('annuler',ResetType::class)
                    ->getForm();
        
        $request = Request::createFromGlobals();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            return $this->render('connexion/index.html.twig', [
                
            ]);
        }

        return $this->render('connexion/form_to_connect.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
