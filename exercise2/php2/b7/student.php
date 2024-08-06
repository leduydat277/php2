<?php 
namespace b7;
class student extends person{
    public $classname;
    public $studentcode;

public function __construct($name,$age,$gender,$classname,$studentcode)
{
    parent:: __construct($name,$age,$gender);
    $this->classname = $classname;
    $this->studentcode = $studentcode;
}
public function showstudent(){
    echo "name:  $this->name <br>";
    echo "age:  $this->age <br>";
    echo "gender:  $this->gender <br>";
    echo "classname:  $this->classname <br>";
    echo "studentcode:  $this->studentcode <br>";
}
}
// $student = new student();
?>