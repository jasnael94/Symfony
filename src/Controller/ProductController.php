<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use  App\Form\ProductType  as  FormProductType ;
use Doctrine\ORM\EntityManagerInterface;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    #[Route('/product_form', name: 'app_product_form')]
    public function new(): Response
    {
    $category = new Product();

    $form = $this->createForm(FormProductType:: class, $category);
    return $this->render('product/new.html.twig',[
        'form' => $form ,
    ]);
    }

    #[Route('/product/add', name:'app_product_add')]
    public function add(Request $request, EntityManagerInterface $em) : Response
    {
        $product = new Product();
       $em->persist();
        return $em->render('product/add.html.twig',[
            'form' => $form ,
        ]);
    }
}
