<?php
/**
 * Created by PhpStorm.
 * User: Anson
 * Date: 11/06/2019
 * Time: 19:32
 */
namespace MVC\Controllers;

class ProductController{
    public function index(){
        echo "<br>" . __METHOD__;

        //include view
        include_once "mvc/view/product/index.php";
    }
    public function create(){
        echo "<br>" . __METHOD__;

        //include view
        include_once "mvc/view/product/create.php";
    }
    public function edit(){
        echo "<br>" . __METHOD__;

        //include view
        include_once "mvc/view/product/edit.php";
    }
    public function delete(){
        echo "<br>" . __METHOD__;

        //include view
        include_once "mvc/view/product/delete.php";
    }
}