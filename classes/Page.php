<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/7/2016
 * Time: 9:43 AM
 */
class Page {
    protected $id;
    protected $creatorId;
    protected $title;
    protected $content;
    protected $dateAdded;
    protected $dateUpdated;

    //Defining Getters Methods

    public function getId(){
        return $this->id;
    }

    public function getCreatorId(){
        return $this->creatorId;
    }

    public function title(){
        return $this->title;
    }

    public function content(){
        return $this->content;
    }

    public function dateAdded(){
        return $this->dateAdded;
    }

    public function dateUpdated(){
        return $this->dateUpdated;
    }







}
