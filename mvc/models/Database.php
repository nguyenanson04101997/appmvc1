<?php
/**
 * Created by PhpStorm.
 * User: Anson
 * Date: 11/06/2019
 * Time: 18:45
 */
namespace MVC\Models;

class Database{

    public $connection;

    const DATABASE_SERVER = "localhost";
    const DATABASE_USER = "root";
    const DATABAS_PASSWORD = "";
    const DATABAS_NAME = "MVC1";

    public  function __construct()
    {
        /**
         *
         */
        if (!$this->connection){
            $this->connection = mysqli_connect(self::DATABASE_SERVER, self::DATABASE_USER,self::DATABAS_PASSWORD,self::DATABAS_NAME);
        }
    }
}