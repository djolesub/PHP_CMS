<?php
/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/8/2016
 * Time: 10:09 AM
 */
session_start();
include_once "includes/conf.php";
include_once "classes/User.php";

$u = new User($conn);
$u->logout();