<?php
/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/8/2016
 * Time: 8:46 AM
 */
session_start();
include_once "includes/conf.php";
include_once "classes/User.php";
if($_POST){

    $u = new User($conn);
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $u->login($email,$pass);
}



include "views/login.php";




