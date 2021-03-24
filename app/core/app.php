<?php

namespace MVC\core;



class app{

    private $controller = 'home';

    private $method = 'index';

    private $params = [];


    public function __construct()
    {

        // echo 'welcome';die;

        $this->url();
        $this->render();
    }
    private function url(){

        if(!empty($_SERVER['QUERY_STRING'])){


             $url =explode( "/",$_SERVER['QUERY_STRING']);

// This controller
             $this->controller = isset($url[0]) ? $url[0]."controller" : "homecontroller";

            // This Methode
            $this->method = isset($url[1]) ? $url[1] : "index";

            unset($url[0],$url[1]);
            // This params
            $this->params = array_values($url);


            //  print_r($this->params);
    }else{
        $this->controller = 'homecontroller';
        $this->method = 'index';
    }
}
private function render(){

    $controllers = "MVC\controllers\\".$this->controller;

            if (class_exists($controllers)) {


                $controller = new $controllers;

            if (method_exists($controller,$this->method)) {

                
call_user_func_array([$controller,$this->method],$this->params);



            }else{

                echo 'm not exist';
            }
            }else{

                echo 'not exiest';

            }

            }
        }