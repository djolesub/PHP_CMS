<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/7/2016
 * Time: 9:43 AM
 */
class Page {
    //Connection
    protected $conn;
    protected $table_name = "pages";

    //Object properties
    protected $id;
    protected $creatorId;
    protected $title;
    protected $content;
    protected $dateAdded;
    protected $dateUpdated;

    //Constructor
    public function __construct($db){
         $this->conn = $db;
    }

    //Read all records from database
    public function readAll(){
        $sql = "SELECT * FROM ".$this->table_name;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if($stmt){
            include "includes/header.inc.php";
            include "includes/main/nav-bar.php";
            include "views/all_posts.php";
            include "includes/main/footer.php";
            include "includes/footer.inc.php";
        }
        /*while($page = $stmt->fetchAll(PDO::FETCH_ASSOC)){
            foreach($page as $p){
                echo $p['content'];
            }
        }*/


    }

    public function lastThree(){
        $sql = "SELECT * FROM ".$this->table_name ." ORDER BY dateAdded LIMIT 3";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if($stmt){
            include "includes/header.inc.php";
            include "includes/main/nav-bar.php";
            include "views/home.php";
            include "includes/main/footer.php";
            include "includes/footer.inc.php";
        }

    }

    //Read One Page Object
    public function readOne($id){
        $sql = "SELECT * FROM ".$this->table_name." WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

    //Create page
    public function create($creatorId,$title,$content){
        try {
            $sql = "INSERT INTO pages(creatorId,title,content) VALUES(:creatorId,:title,:content)";
            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(":creatorId", $creatorId);
            $stmt->bindParam(":title", $title);
            $stmt->bindParam(":content", $content);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                echo "You inserte record";
            }
        }
        catch(PDOException $e){
            echo "Error: {$e->getMessage()}";
            echo "<br>{$e->getLine()}";
            echo "<br>{$e->getFile()}";
        }
        catch(Exception $s){
            echo "<br>Exception is {$s->getMessage()}";
        }

    }
    //Get ID form name
    public function getIdFromName($username){
        $sql = "SELECT creatorId FROM users JOIN pages ON users.id = pages.creatorId WHERE username=:username";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":username","$username");
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res['creatorId'];

    }





    //Defining Getters Methods

    public function getId(){
        return $this->id;
    }

    public function getCreatorId(){
        return $this->creatorId;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getContent(){
        return $this->content;
    }

    public function dateAdded(){
        return $this->dateAdded;
    }

    public function dateUpdated(){
        return $this->dateUpdated;
    }

    public function getIntro($numChars = 200){
        return substr(strip_tags($this->content),0,$numChars);
    }






}
