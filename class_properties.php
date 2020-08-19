<?php

// Functions for properties
// get_class_vars($string)
// get_object_vars($object)
// property_exists($mixed, $string)
 
class Student {
    var $first_name;
    var $last_name;
    var $country = 'None';
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



// foreach($students as $student){
//     echo "Student : "  ,"<br />";
//     echo "Last Name: ",$student->first_name, "<br />" ,
//         "Last Name: ",$student->last_name , "<br />",
//         "Country : ", $student->country, "<br /><br />"; 

// }


$class_vars = get_class_vars('Student');

echo "Class vars : <br />";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

$object_vars = get_object_vars($student1);

echo "Object vars : <br />";
echo "<pre>";
print_r($object_vars);
echo "</pre>";

$property_class = 'Student';
$property = 'Country';

if(property_exists($property_class, $property)){
    echo "Property '", $property , "' exists in ",$property_class, " class.<br />";
}else {
    echo "Property '", $property , "' does not exists in ",$property_class, " class.<br />";
}

echo "<br /><br /><br /><br />"



?>