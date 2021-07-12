<?php
    require_once __DIR__ . '/../includes/app.php';
    use MVC\Router;
    use Controllers\InicioController;
    use Controllers\AuthController;
    use Controllers\AdminController;

    $router = new Router;
    $router->get('/', [InicioController::class, 'index']);
    $router->get('/login', [AuthController::class, 'index']);
    $router->get('/admin/setup', [AdminController::class, 'setup']);
    $router->comprobarRutas();