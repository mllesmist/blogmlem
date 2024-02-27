<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = $form->get('email')->getData();
            $subjec = $form->get('subject')->getData();
            $conten = $form->get('content')->getData();

        }
        return $this->renderForm('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'form'=> $form 
        ]);
    }
}
