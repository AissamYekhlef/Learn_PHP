<?php


// 2 php methods for the classes 
// get_declared_classes() return all the declared classes in the php 
// class_exists($class_name) return true "1" if exists in the declared class or no "0"
 
 
class Product {}


$classes = get_declared_classes();

// echo "Classes : ", implode(',<br /> ', $classes), "<br />";

$class_names = ['Product', 'Student', 'student', 'Maker', 'product'];

foreach($class_names as $class_name) {
    if(class_exists($class_name)) {
        echo "{$class_name} is a <span class='bg-green'>declared </span>class.<br /><br /> ";
    } else {
        echo "{$class_name} is <span class='bg-red'> not declared </span> class.<br /><br /> ";
    }
}


?>



<style>
span.bg-red{
    background-color:red;
}

span.bg-green{
    background-color:green;
}

</style>