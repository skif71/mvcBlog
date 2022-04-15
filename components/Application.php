<?php

namespace app\components;

use app\controller\ArticleController;
use Illuminate\Database\Capsule\Manager as Capsule;

use http\Params;

class Application
{
    public function run()
    {
        $this->configure();
        echo $this->runAction();
    }

    private function configure()
    {
        $capsule = new Capsule;

        $capsule->addConnection([
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'lesson14',
            'username' => 'root',
            'password' => ''
        ]);

        $capsule->setAsGlobal();
    }

    private function runAction()
    {
        //разобрать запрос www.sitename.com/article/latest => 142.22.22.17
        //web server || apache  nginx
        $pathData = [
            'pathInfo'=> 'article/latest'
        ];

        $path = $pathData['pathInfo'];
        $path = explode('/', $path);

        $controller = $path[0];
        $action = $path[1];

        $controllers = [
            'article' => 'app\controller\ArticleController'
        ];

        $controller = new ArticleController();
        //'action'.ucfirst('latest')
        //method_exist

        $action = 'action'.ucfirst($_GET['action']);

        return $controller->$action();
    }
}