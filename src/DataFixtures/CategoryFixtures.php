<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category->setTitle('Windows');
        $category->setDescription('Windows Description ');
        $manager->persist($category);
      

        $category = new Category();
        $category->setTitle('Windows 2');
        $category->setDescription('Windows Description 2');
        $manager->persist($category);
 

        $category = new Category();
        $category->setTitle('Windows 3');
        $category->setDescription('Windows Description 3');
        $manager->persist($category);
       
        $manager->flush();
    }
}
