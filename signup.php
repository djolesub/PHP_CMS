<?php
/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/11/2016
 * Time: 2:43 PM
 */

include_once "includes/conf.php";
include_once "classes/User.php";
if($_POST){

    $u = new User($conn);
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $u->login($email,$pass);
}
include "views/signup.php";