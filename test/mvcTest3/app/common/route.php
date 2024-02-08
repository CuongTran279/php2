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
// $router->get('/', function(){
//     return 'Trang chu';
// });

//định nghĩa đường dẫn trỏ đến Product Controller
$router->get('/', [App\controller\productController::class,'view']);
$router->get('add', [App\controller\productController::class,'add']);
$router->get('delete/{id}', [App\controller\productController::class,'delete']);
$router->get('edit/{id}', [App\controller\productController::class,'edit']);
$router->post('addProduct', [App\controller\productController::class,'addProduct']);
$router->post('editProduct/{id}', [App\controller\productController::class,'editProduct']);
# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>