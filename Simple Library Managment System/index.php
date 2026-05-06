<?php
require_once 'Book.php';
require_once 'Member.php';
require_once 'Library.php';

$library = new  Library();

$book1 =  new Book(1,'Data Structure' , "jhon legend");
$book2 =  new Book(2,'Clean Code' , "Robert cecil marten ");
$book3 =  new Book(3,'Laravel Basics' , "Talyor medf");

$member = new Member(1,"jozef");

$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

$library->addMember($member);

$library->borrow(1,2);


$library->showAllBooks();






