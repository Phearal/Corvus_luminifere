<?php

class kernel
{
    public function bootstrap()
    {
        $router = new Router();
        $controller = new Controller($router);
        $routes = include './src/config/routes.php';

        if (array_key_exists($router->getPage(), $routes)) {
            $methodName = $routes[$router->getPage()];
        } else {
            $methodName = "notFound";
        }
        $controller->title($methodName);
    }
}