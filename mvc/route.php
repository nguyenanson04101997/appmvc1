<?php
/**
 * Created by PhpStorm.
 * User: Anson
 * Date: 11/06/2019
 * Time: 18:52
 */
namespace  MVC;
//nạp namespace
use MVC\Controllers\EmployeeController;
use MVC\Controllers\ProductController;
use MVC\Controllers\ErrorController;

class route{
    public function run(){
        /**
         * url : index.php?controller=employee&action=index
         * $controller = new EmployeeController();
         * $controller->index();
         *
         * url : index.php?controller=employee&action=edit
         * $controller = new EmployeeController();
         * $controller->edit();
         *
         * url : index.php?controller=employee&action=delete
         * $controller = new EmployeeController();
         * $controller->delete();
         *
         * url : index.php?controller=employee&action=create
         * $controller = new EmployeeController();
         * $controller->create();
         * $_REQUEST = $_POST + $_GET
         * *http://localhost/appmvc1/index.php?controller=employee&action=index
         *
         * http://localhost/appmvc1/index.php?controller=employee&action=create
         *
         * http://localhost/appmvc1/index.php?controller=employee&action=edit
         *
         * http://localhost/appmvc1/index.php?controller=employee&action=delete
         */
        $controller = isset($_REQUEST["controller"]) ? trim($_REQUEST["controller"]) : "employee";
        $controller = ucfirst($controller); // Employee
        $controllerName = "MVC\\Controlers\\".$controller."Controller";// MVC\Controllers\EmployeeController

        echo '<br> $controller : ' . $controller;
        echo '<br> $controllerName : ' . $controllerName;

        if ($_REQUEST["controller"] == "employee"){
            $controller = new EmployeeController();
            if ($_REQUEST["action"] == "index"){
                $controller->index();
            }
            if ($_REQUEST["action"] == "create") {
                $controller->create();
            }
            if ($_REQUEST["action"] == "edit") {
                $controller->edit();
            }
            if ($_REQUEST["action"] == "delete") {
                $controller->delete();
            }
        }

    }

}