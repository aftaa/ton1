<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

class IndexController
{

    /**
     * @Route("/", name="app_index")
     */
    public function index()
    {
        return new RedirectResponse('/articles/');
    }
}