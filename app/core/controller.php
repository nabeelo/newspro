<?php

namespace MVC\core;

use Dcblogdev\PdoWrapper\Database;

class controller{

    public function view($path,$param){
        extract($param);
        // echo VIEWS.$path.".php";die;
         require_once(VIEWS.$path.".php");
    }

}