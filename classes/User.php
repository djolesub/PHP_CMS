<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/7/2016
 * Time: 9:54 AM
 */
class User {
    //Connection
    protected $conn;
    protected $table_name = "users";

    public function readAll()
    {
        $sql = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if ($stmt) {
            include "includes/header.inc.php";
            include "includes/main/nav-bar.php";
            include "views/all_contacts.php";
            //include "includes/main/footer.php";
            include "includes/footer.inc.php";
        }
    }

    public function logout(){
        $user = null;
        $_SESSION = array();
        session_destroy();
        header("Location:home.php");
    }

    //User
    protected $id;
    protected $userType;
    protected $username;
    protected $email;
    protected $pass;
    protected $dateAdded;

    public function __construct($db){
        $this->conn = $db;
    }


    //Login
    public function login($email,$password){
        if(isset($email) && !empty($email) && isset($password) && !empty($password)){
            try {
                $sql = "SELECT email FROM users WHERE pass=:password AND email=:email";
                $stmt = $this->conn->prepare($sql);
                $password = $this->encript($password);
                $stmt->bindParam(":password", $password);
                $stmt->bindParam(":email", $email);
                $stmt ->execute();
                if($stmt->rowCount() == 1){

                    $_SESSION['username'] = $email;
                    $_SESSION['password'] = $password;
                    header("Location:contacts.php");
                }else {
                    echo "Wrong Data";
                }
            }
            catch(PDOException $e) {
                echo "{$e->getMessage()}";
            }

        }
    }

    //Method for sign up
    public function signup($userType,$username,$email,$password){
        if(isset($_POST['userType']) && !empty($_POST['userType'])){
            $userType = $_POST['userType'];
        }
        if(isset($_POST['username']) && !empty($_POST['username'])){
            $username = $_POST['username'];
        }
        if(isset($_POST['email']) && !empty($_POST['email'])){
            $userType = $_POST['email'];
        }
        if(isset($_POST['password']) && !empty($_POST['password'])){
            $password = $_POST['password'];
        }
        if("true"){
            $sql = "SELECT email FROM users WHERE pass=:password AND email=:email";
            $stmt = $this->conn->prepare($sql);
            $password = $this->encript($password);
            $stmt->bindParam(":password", $password);
            $stmt->bindParam(":email", $email);
            $stmt ->execute();
            if($stmt->rowCount() == 1){
                echo "You are allready signedup";
            }else {
                $sql = "INSERT";
            }

        }







    }

    public function encript($pass){
        return SHA1($pass);
    }


    public function getUsername(){
        return $this->username;
    }




    public function getId(){
        return $this->id;
    }

    public function isAdmin(){
        if($this->userType == 'admin'){
            return true;
        } else {
            return false;
        }
    }

    public function canEditPage(Page $page){
        return ($this->isAdmin() || ($this->id == $page->getCreatorId()));

    }












}
