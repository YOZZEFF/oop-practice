<?php

class Book {
    

    private  $id ; 
    private $title ;
    private $author ;
    private $isBorrowed = false ;


    public function __construct($id , $title , $author ){

    $this->id = $id ;
    $this->title = $title ;
    $this->author = $author ;

    }

    public function getId(){

        return $this->id;
            
        }

    public function getTitle(){

        return $this->title ;

        }


    public function borrowBook(){

    if($this->isBorrowed == true){

    return false;
    }

        $this->isBorrowed = true ;
        return $this->isBorrowed ;
    }

    public function returnBook(){

    $this->isBorrowed = false ;

    }

    public function isBorrowed(){

    return $this->isBorrowed ;
    
    }





}