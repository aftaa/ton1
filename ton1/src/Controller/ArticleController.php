<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/articles/", name="app_articles")
     * @return Response
     */
    public function articles(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findByForIndex(true);
        return($this->render('article/articles.html.twig', [
            'articles' => $articles,
        ]));
    }

    /**
     * @Route("/{_locale<en|ru>}/articles/{id}/", name="article")]
     * @return Response
     */

    public function index(Article $article): Response
    {
        return $this->render('article/index.html.twig', [
            'article' => $article,
        ]);
    }
}
