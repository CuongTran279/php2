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
$router->get('/', function(){
    return "trang chủ";
});


//định nghĩa đường dẫn trỏ đến Product Controller
$router->get('test', [App\Controllers\ProductController::class, 'hienThiSP']);
$router->get('list', [App\Controllers\ProductController::class, 'listProduct']);
$router->get('add', [App\Controllers\ProductController::class, 'addProduct']);
$router->get('sua', [App\Controllers\ProductController::class, 'editView']);
$router->get('xoa', [App\Controllers\ProductController::class, 'deletePro']);

$router->post('addPro', [App\Controllers\ProductController::class, 'addPro']);
$router->post('editPro', [App\Controllers\ProductController::class, 'editProduct']);

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>