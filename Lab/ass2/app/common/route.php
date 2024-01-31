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
    // if(!isset($_SESSION['user'])){
    //     $router->get('/', [App\controller\homeController::class, 'addU']);
    // }else{
    //     if($_SESSION['user']['role']==1){
        require_once 'app/view/Home/homeAdmin.php';
        // bắt đầu định nghĩa ra các đường dẫn
        $router->get('/', [App\controller\homeController::class, 'addU']);
        $router->get('admin', [App\controller\homeController::class, 'homeAdmin']);
        // Categories
        $router->get('ListCategories', [App\controller\homeController::class, 'viewAllCategories']);
        $router->get('addC', [App\controller\homeController::class, 'addC']);
        $router->post('addCategories', [App\controller\homeController::class, 'addCategories']);
        $router->get('editC/{id}', [App\controller\homeController::class, 'viewIdCategories']);
        $router->get('deleteCategories/{id}', [App\controller\homeController::class, 'deleteCategories']);
        $router->post('editCategories/{id}  ', [App\controller\homeController::class, 'editCategories']);


        // Product
        $router->get('ListProduct', [App\controller\homeController::class, 'viewAllProduct']);
        $router->get('addP', [App\controller\homeController::class, 'addP']);
        $router->post('addProduct', [App\controller\homeController::class, 'addProduct']);
        $router->get('deleteProduct/{id}', [App\controller\homeController::class, 'deleteProduct']);
        $router->post('editProduct/{id}', [App\controller\homeController::class, 'editProduct']);
        $router->get('editP/{id}', [App\controller\homeController::class, 'viewIdProduct']);
        // User
        $router->get('addU', [App\controller\homeController::class, 'addU']);
        $router->post('addUser', [App\controller\homeController::class, 'addUser']);
        $router->get('ListUser', [App\controller\homeController::class, 'viewAllUser']);
        $router->get('editU', [App\controller\homeController::class, 'viewIdUser']);
        $router->post('editUser', [App\controller\homeController::class, 'editUser']);
        $router->get('deleteUser', [App\controller\homeController::class, 'deleteUser']);
        // }else{
        //     $router->get('user', [App\controller\homeController::class, 'homeUser']);
        // }
    // }
        $router->get('list', [App\controller\homeController::class, 'homeUser']);
        $router->post('login', [App\controller\homeController::class, 'login']);    
        $router->get('loginU', [App\controller\homeController::class, 'loginU']);    
        $router->get('detail/{id}', [App\controller\homeController::class, 'detailProdut']);
    
    


    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
    echo $response;
?>