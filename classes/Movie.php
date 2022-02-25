<?php

class Movie{
    private $title;
    private $language;
    
    public function __construct($_title){
        $this->$title = $_title;
    }

    public function getTitle(){
        return $this->$title;
    }

    public function getlanguage(){
        return $this->$language;
    }

    public function setTitle($_title){
        $this->$title = $_title;
    }

    public function setlanguage($_language){
        $this->$language = $_language;
    }

}

?>