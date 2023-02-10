<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Phroute\Phroute\RouteCollector;

class Route 
{
    public static function run($url)
    {
        $route = new RouteCollector();

        // define route

        $route->get('/', [HomeController::class, 'index']);

        $route->group(['prefix' => 'admin'], function ($route) {
            $route->group(['prefix' => 'product'], function ($route) {
                $route->get('/', [ProductController::class, 'index']);
                $route->get('create', [ProductController::class, 'create']);
                $route->post('/create', [ProductController::class, 'store']);
                $route->get('/{id}/edit', [ProductController::class, 'edit']);
                $route->post('/{id}/edit', [ProductController::class, 'update']);
                $route->get('/{id}/delete', [ProductController::class, 'destroy']);
            });
        });

        // end route

        try{
            # NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
            $dispatcher = new \Phroute\Phroute\Dispatcher($route->getData());

            $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
                
            // Print out the value returned from the dispatched function
            echo $response;
        }catch(\Exception $e){
            die($e->getMessage());
        }
    }
}