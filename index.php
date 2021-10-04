<?php

require_once 'vendor/autoload.php';

use App\Controllers\ToDoController;
use App\Controllers\UserController;

use App\Models\ToDoReader;



$name= $_POST['name'];

$comments = $_POST['comments'];
ob_clean();
$fp = fopen("todo.csv","a");
$cvsData = $name . ";" .  $comments ."\n";
if($fp) {

    fwrite($fp, $cvsData);
    fclose($fp);

}


$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/', 'UserController');
    $r->addRoute('GET', '/out', 'ToDoController');



});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];

        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        $controller = 'App\Controllers\\'.$handler;


        $controller=new ToDoController;
      $controller->index2();



      $controller = new UserController;
      $controller->index();
        break;

}





?>
