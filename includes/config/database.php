<?php
    function conectarDB() : mysqli {
        $db = new mysqli('localhost', 'root', '', 'mipurificadora');
        $db->query("SET NAMES 'utf8'");

        if(!$db){
            echo "No se pudo conectar";
            exit;
        }

        return $db;
    }