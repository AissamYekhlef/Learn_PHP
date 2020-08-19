<?php


class Person {
    private $name;
    private $age = 10;
    private $countru;

    public function get_age(){
        return $this->age;
    }
}


class Student extends Person {

}


$student1 = new Student;
$student1->age = 2000; // the Overloading use a property with private visibility or not exists. cannot change the real value 
$student1->last_name = 'Faysal';
$student1->country = 'Algeria';


echo $student1->get_age() . "<br />"; // get the real value of age pro

echo $student1->age . "<br />";
// echo $student2->My_Last_NAME() . "<br />";


echo $student1->get_age() . "<br />";
echo $student1->last_name . "<br />";


?>