<?php

    namespace MVC;

    class Router{
        public $rutasGET = [];
        public $rutasPOST = [];

        public function __construct(){
            
        }

        public function get($url, $fn){
            $this->rutasGET[$url] = $fn; 
        }

        public function post($url, $fn){
            $this->rutasPOST[$url] = $fn; 
        }

        public function comprobarRutas(){
            $urlActual = $_SERVER['PATH_INFO'] ?? '/';
            $metodo = $_SERVER['REQUEST_METHOD'];

            if($metodo === 'GET'){
                $fn = $this->rutasGET[$urlActual] ?? null;
            }
            else if($metodo === 'POST'){
                $fn = $this->rutasGET[$urlActual] ?? null;
            }

            if($fn){
                call_user_func($fn, $this);
            }
            else{
                $this->render('404');
            }
        }

        //Muestra una vista
        public function render($view, $datos = []){
            //Mapeamos los datos a variables independientes
            foreach($datos as $key => $value){
                $$key = $value;
            }

            //Almacena en memoria durante un momento
            ob_start();
            include __DIR__ . "/views/$view.php";
            $contenido = ob_get_clean();
            include __DIR__ . "/views/layout.php";
        }
    }