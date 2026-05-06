<?php

class Student {

private $name;
private $age ;
private $grades  = [];

public function __construct($name , $age , $grades){


   $this->name = $name;
   $this->age = $age;
   $this->grades = $grades;
}

public function getName(){

return $this->name ;
}
public function getAge(){

return $this->age ;
}
public function getGrades(){
    
    

return $this->grades ;

}

public function addGrades($grades){

$this->grades[] = $grades ;
}

public function calcAverage(){

return array_sum($this->grades) / count($this->grades);
}

public function passedOrFailed(){

if($this->calcAverage() >= 50){
    return "passed";
}else{
    return "failed";
}

}

}