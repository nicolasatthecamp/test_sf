<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_default')]
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'title' => 'Bienvenue sur mon application Symfony',
            'message' => 'Ceci est la page d\'accueil par défaut créée avec DefaultController.',
        ]);
    }
}
