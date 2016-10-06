<?php
/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/7/2016
 * Time: 8:09 AM
 */

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "coperman";
    private $db = "cms";

    private $conn;

    public function __construct(){
        /*try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db}",$this->username,$this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            //throw new Exception("There was problems while connecting to database");
        }
        catch(PDOException $e){
            $page_title = "Errors";
            include "includes/header.inc.php";
            include "includes/main/nav-bar.php";
            include "views/errors.html";
            include "includes/main/footer.php";
            include "includes/footer.inc.php";
            exit();
            echo "Error message:{$e->getMessage()}";
        }*/

    }


    public function getConnection(){
        if($this->conn == null) {
            try {
                $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //throw new Exception("There was problems while connecting to database");
            } catch (PDOException $e) {
                /*$page_title = "Errors";
                include "includes/header.inc.php";
                include "includes/main/nav-bar.php";
                include "views/errors.html";
                include "includes/main/footer.php";
                include "includes/footer.inc.php";
                exit();*/
                echo "Error message:{$e->getMessage()}";
            }
        }
        return $this->conn;
    }


}