<?php

    define('TEMPLATES_URL', __DIR__ . '/../views/includes/templates');
    define('FUNCIONES_URL', __DIR__ . '/funciones');

    function incluirTemplate(string $nombre, string $pagina = ''){
        include TEMPLATES_URL . "/${nombre}.php";
    }

    function debug($variable){
        echo "<pre>";
        var_dump($variable);
        echo "</pre>";
        exit;
    }