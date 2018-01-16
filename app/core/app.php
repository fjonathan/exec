<?php

use Flow\Loader;
use Flow\Adapter\FileAdapter;

use Illuminate\Database\Capsule\Manager as Capsule;

Class App{

    protected $model, $slug, $reference;

    public static function serverPaths(){

        $url = $_SERVER['REQUEST_URI']; //returns the current URL
        $parts = explode('/',$url);
        $dir = $_SERVER['SERVER_NAME'];
        for ($i = 0; $i < count($parts) - 1; $i++) {
            $dir .= $parts[$i] . "/";
        }

        // Global
        define('APP_ROOT', getcwd());
        define('APP_PATH', 'http://' . $dir);

    }

    public static function db(){
        return new Capsule();
    }

    public function model($model){

        $path = str_replace("Model","", $model);

        $m_model = lcfirst($model);
        $m_path = lcfirst($path);

        require_once '../web/'. $m_path .'/src/'. $m_model .'.php';

        return new $model();

    }

    public function view($path, $view, $data){

        $this->template('theme.header');

        define('CURRENT_PATH', $path);

        $flow = new Loader(
            Loader::RECOMPILE_NORMAL,
            new FileAdapter(APP_ROOT . '/' . $path . '/'),
            new FileAdapter(APP_ROOT . '/cache')
        );

        try {

            $template = $flow->load($view . '.html');
            $template->display($data);

        } catch (\Exception $e) {
            // something went wrong!
            die($e->getMessage());
        }

        $this->template('theme.footer');

    }

    public function template($template){

        require_once APP_ROOT . '/theme/files/'. $template .'.php';

    }

}