<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ArticleRepository $articleRepository, CategoryRepository $categoryRepository): Response
    {
        $articles = $articleRepository->findBy([], ['created_at' => 'DESC']);
        $categories = $categoryRepository->findBy([], ['name' => 'ASC']);

        return $this->render('pages/home/index.html.twig', [
            'articles' => $articles,
            'categories' => $categories,
        ]);
    }
}
