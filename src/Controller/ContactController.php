<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $address = $form->get('email')->getData();
            $subjec = $form->get('subject')->getData();
            $conten = $form->get('content')->getData();

            $email = (new Email())
            ->from($email)
            ->to('admin@example.com')
            ->subject($subject)
            ->text($content);

            $mailer->send($email);
        }
        return $this->renderForm('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'form'=> $form 
        ]);
    }
}
