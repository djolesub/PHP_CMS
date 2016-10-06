<?php
/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/6/2016
 * Time: 6:00 PM
 */
    include_once ("includes/conf.php");
    if($_GET) {
        if (!isset($GET['id'])) {
            $id = trim($_GET['id']);
            $page = new Page($conn);
            $page->readOne($id);
        }
    }
                /*echo $page['id'];
                echo $page['title'];
                echo $page['content'];*/

                /*include "includes/header.inc.php";
                include "views/page.php";




?>