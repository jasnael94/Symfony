<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BookListController extends AbstractController
{
    #[Route('/book/list', name: 'app_book_list')]
    public function index(): Response
    {   $books =[
        [
            'id'=> 0 ,
            'title'=> 'Cars' ,
            'autor' => 'Jean',

        ],
        [
            'id' => 1,
            'title' => 'Actors' ,
            'autor' => 'Abdoul',
        ],
        [
            'id' => 2 ,
            'title' => 'Cities',
            'autor' => 'Xion'
        ],
        [
            'id' => 3 ,
            'title' => 'Fruits',
            'autor' => 'Pablo',
        ],


    ];
        return $this->render('book_list/index.html.twig', [
            'book_name' => 'Book List',
            'books' => $books ,
        ]);
    }
    #[Route('/book_list/{id}', name: 'app_book_list_detail',requirements:['id' => '[0-9]+'])]
    public function show($number): Response
    {   
        return $this->render('book_list/show.html.twig', [
            'controller_name' => 'NumberController => book_detail',
            'number' => $number ,
        ]);
    }
}
