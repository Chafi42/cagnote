<?php

namespace App\Controller;

use App\Repository\CampaignRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/paie', name: 'app_paie')]
    public function paie(): Response
    {
        return $this->render('home/payement.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/create', name: 'app_create')]
    public function create(): Response
    {
        return $this->render('home/create.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/show', name: 'app_show')]
    public function show(): Response
    {
        return $this->render('home/show.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/boucle', name: 'app_boucle')]
    public function boucle(): Response
    {
            $array = [1, 2, 4, 9];

        return $this->render('home/boucle.html.twig', [
            'numbers' => $array
        ]);
    }

}