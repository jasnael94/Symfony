<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NumberController extends AbstractController
{
    #[Route('/number', name: 'app_number')]
    public function index(): Response
    {
        return $this->render('number/index.html.twig', [
            'controller_name' => 'NumberController',
        ]);
    }
    #[Route('/number/{number}', name: 'app_number_detail',requirements:['number' => '[0-9]+'])]
    public function show($number): Response
    {
        return $this->render('number/show.html.twig', [
            'controller_name' => 'NumberController => show',
            'number' => $number ,
        ]);
    }
}
