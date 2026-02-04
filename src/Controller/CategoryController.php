<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CategoryController extends AbstractController
{
    #[Route('/category/{slug:category}', name: 'category_show')]
    public function show(Category $category): Response
    {
        return $this->render('pages/category/show.html.twig', [
            'category' => $category,
            'articles' => $category->getArticles()
        ]);
    }
}
