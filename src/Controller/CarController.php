<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CarController extends AbstractController
{
    #[Route('/car', name: 'app_car')]
    public function index(int $id): Response
    {      $cars = [
        [
            'id' => 0 ,
            'brand' => 'bmw',
            'color' => 'white',
        ],
        [
            'id' => 1 ,
            'brand' => 'Mercedes Benz',
            'color' => 'black',
        ],
    ];
    $car= $cars[$id];
        return $this->render('car/car.html.twig', [
            'controller_name' => 'Car',
            'car' => $car ,
        ]);
    }
}
