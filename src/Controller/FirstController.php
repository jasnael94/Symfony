<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FirstController extends AbstractController
{
    #[Route( name: 'app_first' , path:'/first/{id}') ]
    public function index(string $id): Response
    {   $books = [
            [
                'id' => 0 ,
                'title' => 'GOT',
            ],
            [
                'id' => 1 ,
                'title' => 'Harry Potter',
            ],
        ];
        $book= $books[$id];

        return $this->render('first/index.html.twig', [
            'controller_name' => 'FirstController',
        ]);
    }

}
