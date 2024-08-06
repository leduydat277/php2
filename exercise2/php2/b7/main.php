<?php 
require_once 'rectangle.php';
require_once 'square.php';
require_once 'person.php';
require_once 'student.php';
require_once 'number.php';

use b7\rectangle;
use b7\square;
use b7\person;
use b7\student;
use b7\number;

$hcn = new rectangle(5 ,10);
$hv = new square(6);
echo "dien tich hcn".$hcn->tinhdientich();

echo "dien tich hv".$hv->tinhdientich();

$hcn->getname();
$hv->getname();
echo "<br>";
$student1 = new student(
    'hùng',20,'male','web1233','ph37757'
);
$student1->showstudent();
//tính 10 * pi
echo 10 * number:: $pi;

?>