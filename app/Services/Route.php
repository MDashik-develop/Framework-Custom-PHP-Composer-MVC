<?php
namespace App\Services;

class Route{
   private static $routes = [];
   private static $controllerNamespace = 'App\Controller\\';

   public static function add($uri, $controller, $action, $methood='GET', $middleware=[]) {
      self::$routes[] = [
         'uri' => $uri,
         'controller' => $controller,
         'action' => $action,
         'method' => $methood,
         'middleware' => $middleware
      ];
   }

   public static function get($uri, $controller, $action, $middleware=[]) {
      self::add($uri, $controller, $action, 'GET', $middleware);
   }

   public static function post($uri, $controller, $action, $middleware=[]) {
      self::add($uri, $controller, $action, 'POST', $middleware);
   }

   public static function handle() {
      $requestURI     =  $_SERVER['REQUEST_URI'];
      $requestURI = rtrim($requestURI, '/'); // remove trailing slash
      $requestMethod =  $_SERVER['REQUEST_METHOD'];

      foreach (self::$routes as $route) {
        // normalize route uri
        $routeUri = '/' . ltrim($route['uri'], '/');
        $routeUri = rtrim($routeUri, '/');
        
         if ($routeUri === $requestURI && $route['method'] === $requestMethod) {

            //Middleware authHandle
            foreach ($route['middleware'] as $middleware) {
               $middlewareClass = new $middleware;
               $middlewareClass->authHandle();
            }

            $controllerClass = self::$controllerNamespace.$route['controller'];
            $actionName = $route['action'];

            $controller = new $controllerClass;
            $controller->$actionName();
            return;
         }
      }
      echo '404 page not found';
   }
}