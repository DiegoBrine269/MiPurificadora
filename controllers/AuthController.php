<?php
    namespace Controllers;
    use MVC\Router;

    class AuthController{
        public static function index (Router $router){
            $router->render('login', [
                'pagina' => 'login'
            ]);
        }
    }