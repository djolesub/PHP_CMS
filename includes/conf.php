<?php
/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/7/2016
 * Time: 8:04 AM
 */
    //Configuration file with autoloader function and database conf
    require_once "autoload.php";
    require_once "Database.php";
    $user = (isset($_SESSION['user']))? $user:null;
    $db_instance = new Database();
    $conn = $db_instance->getConnection();



?>