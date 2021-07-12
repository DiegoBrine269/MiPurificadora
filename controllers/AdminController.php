<?php
    namespace Controllers;
    use MVC\Router;

    class AdminController{
        public static function setup (Router $router){
            $router->render('admin/setup', [
                'pagina' => 'setup'
            ]);
        }
    }