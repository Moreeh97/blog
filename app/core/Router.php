<?php
namespace App\Core;

class Router {
    protected $routes = [];

    public function get($uri, $action) {
        $this->routes['GET'][$uri] = $action;
    }

    public function post($uri, $action) {
        $this->routes['POST'][$uri] = $action;
    }

    public function dispatch($method, $uri) {
        $uri = parse_url($uri, PHP_URL_PATH); // تنظيف من query string
        if (isset($this->routes[$method][$uri])) {
            $action = $this->routes[$method][$uri];
            return $this->callAction($action);
        }

        http_response_code(404);
        echo "صفحة غير موجودة";
    }

    protected function callAction($action) {
        // إذا كان string بشكل "Controller@method"
        if (is_string($action) && strpos($action, '@') !== false) {
            [$controller, $method] = explode('@', $action);
            $controller = "App\\Controllers\\$controller";
            if (class_exists($controller)) {
                $controllerObj = new $controller();
                if (method_exists($controllerObj, $method)) {
                    return $controllerObj->$method();
                }
                throw new \Exception("الميثود $method غير موجود في $controller");
            }
            throw new \Exception("الكنترولر $controller غير موجود");
        }

        // إذا كان callback
        if (is_callable($action)) {
            return $action();
        }

        throw new \Exception("Action غير صالح");
    }
}
