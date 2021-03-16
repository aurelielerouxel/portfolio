<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioController extends AbstractController
{
    /**
     * @Route("/portfolio", name="portfolio")
     * @Route("/acceuil", name="home")
     * @Route("/", name="root")
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('portfolio/index.html.twig');
    }
}
