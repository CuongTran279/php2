<?php
    use Phroute\Phroute\RouteCollector;
    $url = !isset($_GET['url']) ? "/" : $_GET['url'];
    $router = new RouteCollector();
    // filter check đăng nhập
    $router->filter('auth', function(){
        if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
            header('location: ' . BASE_URL . 'login');die;
        }
    });

    // bắt đầu định nghĩa ra các đường dẫn
    $router->get('/', [App\controller\homeController::class, 'home']);
    // Categories
    $router->get('ListCategories', [App\controller\homeController::class, 'viewAllCategories']);
    $router->get('addC', [App\controller\homeController::class, 'addC']);
    $router->get('addCategories', [App\controller\homeController::class, 'addCategories']);
    $router->get('deleteCategories', [App\controller\homeController::class, 'deleteCategories']);
    $router->get('editCategories', [App\controller\homeController::class, 'editCategories']);


    // Product
    $router->get('ListProduct', [App\controller\homeController::class, 'viewAllProduct']);
    $router->get('addP', [App\controller\homeController::class, 'addP']);
    $router->get('addProduct', [App\controller\homeController::class, 'addProduct']);
    $router->get('deleteProduct', [App\controller\homeController::class, 'deleteProduct']);
    $router->get('editProduct', [App\controller\homeController::class, 'editProduct']);
    // User

    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
    echo $response;
?>