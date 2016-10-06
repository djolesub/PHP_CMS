<?php
/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/7/2016
 * Time: 5:47 PM
 */
include_once "includes/conf.php";
include_once "classes/Page.php";
$page = new Page($conn);
$page->readAll();




?>