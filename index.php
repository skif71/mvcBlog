<?php

//Реализовать MVC блог с новостями, пользователями.
//Всё рендерится через ваш //выбранный шаблонизатор.
//Дополнительно нужно использовать 2+ стороннихбиблиотек
// (var-dumper не считается).

//точка входа
require_once "vendor/autoload.php";
use app\components\Application;

$app = new Application();
$app->run();



