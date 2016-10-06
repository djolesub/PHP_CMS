<?php
/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/7/2016
 * Time: 5:16 PM
 */
include_once "includes/conf.php";
include_once "classes/User.php";
$us = new User($conn);
$us->readAll();


?>