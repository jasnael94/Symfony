<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Category;
use App\Form\CategoryType as FormCategoryType;

class CategoryController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function index(): Response
    {
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }
    #[Route('/category_form', name: 'app_category_form')]
    public function new(): Response
    {
    $category = new Category();

    $form = $this->createForm(FormCategoryType:: class, $category);
    return $this->render('category/new.html.twig',[
        'form' => $form ,
    ]);
    }
}
