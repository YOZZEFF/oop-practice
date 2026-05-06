<?php
class Library {


   private $books  = [];
   private $members = [] ;


 
public function addBook(Book $book){

foreach($this->books as $b){

      if($book->getId() == $b->getId() ){

      return false ;
      }
}
$this->books [] = $book;
      return true ;

}

public function addMember(Member $member){

  foreach($this->members as $m ){

  if($m->getId() == $member->getId()){

  return false ;
  }
  }
  $this->members [] = $member ;
  return true ;
}

public function findBookById($id){

 foreach($this->books as $b){

   if($b->getId() == $id){
    return $b ;
   }

 }

 return null ;
}

public function findMemberById($id){

foreach($this->members as $m){

if($m->getId() == $id){
    return $m ;
}
}
return null ;
}

public function borrow($memberId , $bookId){

$member = $this->findMemberById($memberId);
$book = $this->findBookById($bookId);

if(!$member || !$book){
    return false;
}

if($book->isBorrowed()){
      return false;
}
$member->borrow($book);
$book->borrowBook();
return true ;


}

public function showAllBooks(){

 foreach($this->books as $b){

    echo $b->getTitle()."<br>";
    if($b->isBorrowed()){

      echo " the book is Borrowed";
    }else{

         echo "the book is Available ";


    }
            echo "<br><br>";

 }


}

}