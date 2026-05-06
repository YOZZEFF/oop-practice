<?php


class Classroom {
  

    private $students = [] ;


    public function addStudent(Student $student){

    $this->students [] = $student ;
    }


    public function reportOfStudents(){

    foreach($this->students as $student){

   echo 'Name :' . $student->getName() . "<br>" .
        'Age :' . $student->getAge() . "<br>" . 
        'Grades :' . implode(', ', $student->getGrades()) . "<br>" .
        'Status :' . $student->passedOrFailed() . "<br>" ;

       
    }


    }

    public function getTopOfStudents(){

    $top = null ;

    foreach($this->students as $student ){

    if($top == null || $student->calcAverage() > $top->calcAverage()){

    $top = $student ;

    }

    }

    echo "Top student is : " . $top->getName() . "(" . $top->calcAverage() . ")" ;
    
    }

}