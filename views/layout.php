<?php
    if(!isset($_SESSION)){
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;
    if(!isset($pagina)){
        $pagina = '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiPurificadora</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Palanquin:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Palanquin:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../build/css/app.css">
</head>

    <body class="fondo-oscuro">
        <header>

            <div class="navbar-contenedor <?php echo $pagina?>">
                <nav class="contenedor navbar">

                    <?php if($pagina == '' || $pagina == 'inicio') { ?>
                        <a href="/">
                            <h1 class="titulo-header <?php echo 'titulo-'.$pagina?>">MiPurificadora</h1>        
                        </a>
                    <?php } ?>
                    
                    <?php if($pagina == 'login') { ?>
                        <h1 class="titulo-header">Iniciar Sesión</h1>        
                    <?php } ?>

                    <?php if($pagina == 'setup') { ?>
                        <h1 class="titulo-header">Configure su entorno</h1>        
                    <?php } ?>

                    <?php if($pagina == 'inicio') { ?>        
                        <a href="/login" class="btn-azul-claro">Iniciar Sesión</a>
                    <?php } ?>


                </nav>
            </div>

            <?php if($pagina == 'inicio') { ?>
                <div class="hero">
                    <div class="contenedor">    
                        <h2 class="titulo-hero mb-3">Obtenga una prueba gratis hoy mismo</h2>
                        <p class="mb-3">Y comience a gestionar su purificadora de agua de una forma más práctica</p>
                        <a href="#" class="btn-azul-claro">Suscribirse</a>
                    </div>
                </div>
            <?php } ?>
        </header>

        <?php echo $contenido?>

        <?php if($pagina === 'inicio') { ?>
            <footer class="footer">
                <div class="contenedor">
                    <p> Copyright &copy; <?php echo date("Y")?> </p>
                </div>
            </footer>
        <?php } ?>
    </body>
</html>