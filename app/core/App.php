<?php
namespace app\core;

class App {
    private $controller = 'Main';
    private $method = 'index';

    public function __construct() {
        $url = self::parseUrl();
        $this->setController($url);
        $this->setMethod($url);
        $params = $this->getParams($url);
        call_user_func_array([ $this->controller, $this->method ], $params);
    }

    private function setController($url) {
        if (isset($url[0])) {
            $controller = 'app\controllers\\' . $url[0];
            if (file_exists('app/controllers/' . $url[0] . '.php')) {
                $this->controller = new $controller;
            }
        }
    }

    private function setMethod($url) {
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
        }
    }

    private function getParams($url) {
        unset($url[0], $url[1]);
        return $url ? array_values($url) : [];
    }

    public static function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}