<?php

// Class methods
// get_class_methods(mixed $class_name)
// method_exists(mixed $object, string $method_name)
 
class Student {
    var $first_name;
    var $last_name;
    var $country = 'None';


    function say_hello(){
        return 'Hello World from ' . $this->first_name;
    }
     function my_last_name(){
        return 'Hello World from ' . $this->last_name;
    }

}

$student1 = new Student;
$student1->first_name = 'Samir';
$student1->last_name = 'Faysal';
$student1->country = 'Algeria';


$student2 = new Student;
$student2->first_name = 'Islam';
$student2->last_name = 'Ramzi';

$students = [$student1, $student2];

echo "<pre>";
print_r($students);
echo "</pre>";



echo $student1->say_hello() . "<br />";
echo $student2->My_Last_NAME() . "<br />";

echo "<br /><br />";

$class_methods = get_class_methods('Student');
echo "Class methods : "  . implode(' , ', $class_methods) . " <br />";


echo "<br /><br />";


$method_class = 'Student';
// $method = 'My_Last_NAME';
$method = 'Say_HeLLo'; // the letter upper ou lower not required the same.

if(method_exists($method_class, $method)){
    echo "Method '", $method , "' exists in ",$method_class, " class.<br />";
}else {
    echo "Method '", $method , "' does not exists in ",$method_class, " class.<br />";
}



function double_br(){
    echo "<br /><br />";
}

function br(){
    echo "<br />";
}

?>