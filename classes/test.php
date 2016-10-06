<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/7/2016
 * Time: 2:06 PM
 */
class test{
    public function readAll(){
        $sql = "SELECT * FROM ".$this->table_name;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMethod(PDO::FETCH_CLASS,"".get_class($this)."");
        $page = $stmt->fetch();
        var_dump($page);
    }

}

include "Page.php";
include "../includes/Database.php";

$db_instance = new Database();
$conn = $db_instance->getConnection();

$page = new Page($conn);
print_r($page);
$page->readAll();
print_r($page);