<?php
/**
 * Created by PhpStorm.
 * User: Anson
 * Date: 11/06/2019
 * Time: 18:56
 */
namespace MVC\Controllers;
class ErrorController{

    public function redirect404(){
        include_once "mvc/view/error/404.php";
    }
}