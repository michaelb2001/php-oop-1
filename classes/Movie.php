<?php

class Movie{
    private $title;
    private $language;
    
    public function __construct($_title,$_language){
        $this->title = $_title;
        $this->language = $_language;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getLanguage(){
        return $this->language;
    }

    public function setTitle($_title){
        $this->title = $_title;
    }

    public function setLanguage($_language){
        $this->language = $_language;
    }

}

?>