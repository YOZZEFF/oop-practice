<?php

class Member{

 private $id ;
 private $name ;
 private $borrowedBooks = [];

 
 
 public function __construct( $id , $name ){

        $this->id = $id ;
        $this->name = $name ;
        


 }

 public function getId(){

  return $this->id ;
 }

 public function borrow(Book $book){

 foreach($this->borrowedBooks as $b){

 if($book->getId() == $b->getId()){
    return false ;
 }
 }

  

   $this->borrowedBooks [] =  $book; 

  return true ;

 }

 public function returnBook (Book $book){

 foreach($this->borrowedBooks as $key =>$b){

  if($book->getId() == $b->getId()){
unset($this->borrowedBooks[$key]);

 return true ;


  }

 }

 return false ;


 }







}