<?php

namespace application\core;

class Router{

    protected $routes = [];
    protected $params = [];

    public function __construct()
    {
        $arr = require 'application/config/routes.php';
        foreach ($arr as $route => $param) {
            $this->add($route, $param);
        }
    }

    public function add($route, $params) {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }

    public function match() {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    function run() {
        if ($this->match()) {
            $path = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller';
            if(class_exists($path)) {
                $action = $this->params['action'].'Action';
                if(method_exists($path, $action)) {
                    $controller = new $path;
                    $controller->$action();
                } else {
                    echo $action . ', not found!';
                }
            } else {
                echo $path . ', не найден!';
            }
        } else {
            echo 'Route not found!';
        }
    }
}