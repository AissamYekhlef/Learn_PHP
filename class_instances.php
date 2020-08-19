<?php
// 2 php methods for the instances
// get_class('object_name')
// is_a('object_name', 'Class_name') to defined if the object is an instance from this class.


class Student {
    
}

$student1 = new Student;

echo " student1 is an instanse from : ", get_class($student1), "<br /><br />";

$class_names = ['Product', 'Student', 'student', 'Maker', 'product'];

foreach($class_names as $class_name) {
    if(is_a($student1 , $class_name)) {
        echo "student1 is a {$class_name}.<br /><br /> ";
    } else {
        echo "student1 is not a {$class_name}.<br /><br /> ";
    }
}




?>