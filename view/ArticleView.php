<?php

namespace app\view;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class ArticleView
{
    public function __construct()
    {
        $loader = new FilesystemLoader(__DIR__.'/article');
        $this->twig = new Environment($loader);
    }

    public function renderOne(\stdClass $article) : string
    {
        return $this->twig->render('index.html', ['article' => $article]);
    }

    public function renderAll() : string
    {

    }
}