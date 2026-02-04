<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ArticleController extends AbstractController
{
    #[Route('/article/{slug:article}', name: 'article_show')]
    public function show(Article $article): Response
    {
        return $this->render('pages/article/show.html.twig', [
            'article' => $article,
        ]);
    }
}
