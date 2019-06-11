<?php
/**
 * Created by PhpStorm.
 * User: Anson
 * Date: 11/06/2019
 * Time: 18:44
 */
namespace  MVC\Controllers;

class EmployeeController{

    public function index(){
        echo "<br>" . __METHOD__;

        // include view
        include_once "mvc/view/employee/index.php";
    }

    public function create(){
        echo "<br>" . __METHOD__;
        // include view
        include_once "mvc/view/employee/create.php";

    }
    public function edit(){

        echo "<br>" . __METHOD__;
        // include view
        include_once "mvc/view/employee/edit.php";

    }

    public function delete(){

        echo "<br>" . __METHOD__;
        // include view
        include_once "mvc/view/employee/delete.php";

    }
}