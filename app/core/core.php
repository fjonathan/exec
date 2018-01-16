<?php

Class Core {

    protected $controller = 'index';
    protected $method = '';
    protected $theme = 'b0nzai';
    protected $params = [];

    public function __construct()
    {

        $url = $this->parseUrl();

        if (empty($url['0'])) {
            require_once '../web/' . $this->controller . '/src/' . $this->controller . 'Controller.php';
        }elseif(file_exists('../web/' . $url['0'] . '/src/' . $url['0'] . 'Controller.php')){
            $this->controller = $url['0'];
            require_once '../web/' . $url['0'] . '/src/' . $url['0'] . 'Controller.php';
        }else{
            die();
        }

        if (!empty($this->controller)) {
            $this->controller = new $this->controller;
        }

        if(isset($url[2])) {
            if (method_exists($this->controller, $url[2])) {
                $this->method = $url[2];
                unset($url[2]);
            }
        }elseif(isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }else{
            $this->method = "index";
        }

        if ((empty($this->method)) or (empty($this->controller))){

            $lastPart =  end(explode('/', $_GET['url']));
            $this->errorHandle($lastPart);

            exit;
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    public static function parseUrl(){
        if(isset($_GET['url'])){
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return false;
    }


    public function errorHandle($info) {
        echo "not found:" . $info;
    }

}


