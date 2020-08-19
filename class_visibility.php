<?php

// Class Visibility
// public, protected and and private 
// 
 
class Student {
    public $first_name;
    public $last_name;
    public $country = 'None';

 
    protected $regestration_id;
    private $tuition = 60.00;
    private $num = 0;

    public function hello_world(){
        return 'Hello World!';
    }
    protected function hello_family(){
        return 'Hello family!';
    }
    private function hello_me(){
        return 'Hello me!';
    }

    public function get_tuition(){
        return $this->tuition;
    }

}

class PartTimeStudent extends Student {
    public function hello_parent(){
        return $this->hello_family();
    }

    public function set_regestaction_id($new_id){
        return $this->regestration_id = $new_id; // can access to protected property
    }
    public function get_regestaction_id(){
        return $this->regestration_id; // can access to protected property
    }
    public function set_tuition($value){
        return $this->tuition = $value;
    }
} 


// $student1 = new Student;
$student1 = new PartTimeStudent;
$student1->first_name = 'Samir';
$student1->last_name = 'Faysal';
$student1->country = 'Algeria';
// $student1->regestration_id = 55; //can not access to protected property from out the subclass of the parenbt class 
// $student1->tuition = 5.0;
$student1->num2 = 600.0;
    // TESTS

// echo $student1->regestration_id; //Cannot access protected property Student::$regestration_id
// echo $student1->tuition = 0.00; //Cannot access private property Student::$tuition

echo $student1->num2 . "<br />";


echo $student1->hello_world() . "<br />";
echo $student1->hello_parent() . "<br />"; // can not access to protected method 
// echo $student1->hello_me() . "<br />";// can not access to private method


echo $student1->set_regestaction_id(111) . "<br />";
echo $student1->get_regestaction_id() . "<br />";


echo $student1->get_tuition() . "<br />";

echo $student1->set_tuition(1000) . "<br />";

echo 'tuition : ' . $student1->tuition . "<br />";


?>