<?php

require_once 'Student.php';
require_once 'Classroom.php';


$student1  = new Student ('jeo' , 24 , [30 , 50]);
$student2  = new Student ('mo' , 21 , [40 , 20]);
$student3  = new Student ('dod' , 23 , [10 , 20]);

$classroom = new Classroom();

$classroom->addStudent($student1);

$classroom->addStudent($student2);
$classroom->addStudent($student3);


$classroom->reportOfStudents();
echo "<br>";

$classroom->getTopOfStudents();