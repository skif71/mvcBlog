<?php
//контроллер никогда не отвечает за бизнес логику.

namespace app\controller;

use app\model\Article;
use app\view\ArticleView;

class ArticleController
{
    public function actionAll()
    {
        $articles = new Article();
        $articles = $articles->getAll();
    }

    public function actionGetById()
    {

    }

    public function actionCalculate()
    {

    }

    public function actionLatest()
    {
        //бизнес логика
        $articles = new Article();
        $article = $articles->getLatest();

        //красиво отрисовать
        $view = new ArticleView();
        return $view->renderOne($article);
    }
}