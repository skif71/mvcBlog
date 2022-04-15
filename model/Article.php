<?php

namespace app\model;
use Illuminate\Database\Capsule\Manager as Capsule;

class Article
{
    public function getAll()
    {
        return Capsule::table('article')
            ->where('id','>',0)
            ->get();
    }
    public function getById()
    {

    }
    public function getLatest(): \stdClass
    {
        $article =  Capsule::table('article')
            ->orderBy('id', 'desc')
            ->limit(1)
            ->get();

        $article = $article->pop();

        return $article;
    }
}