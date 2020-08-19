<?php


class Student {

    public static $grades = ['Freshman', 'Sophomore', 'Junior', 'Senior'];
    private static $total_students = 0;
    
    public static function motto(){
        return "To Learn PHP OOP";
    }  

    public static function count(){
        return self::$total_students;
    }  

    public static function add_student(){
        self::$total_students++;
    }

}

echo Student::$grades[0] . "<br />";
echo Student::motto() . "<br />";

echo Student::count() . "<br />";
echo "Added Student" . "<br />";
echo Student::add_student() . "<br />";
echo Student::count() . "<br />";

echo '<hr>';
// echo Student::$total_students . "<br />"; // Error => Cannot access private property

// Static Inheritance 

class PartTimeStudent extends Student {

    private static $total_students_part = 0;

    public static function count_part(){
        return self::$total_students_part;
    }
    //Overriden the method for add to both of subclass and parent
    public static function add_student(){
        Student::add_student();
        self::$total_students_part++;
    }

}

echo PartTimeStudent::$grades[0] . "<br />";
echo PartTimeStudent::motto() . "<br />";

//Change sre shared too!

PartTimeStudent::$grades[] = "Alumu";
echo implode(', ', Student::$grades). "<br />";

Student::add_student() ; // total_students = 2
PartTimeStudent::add_student() ; // total_students_part = 1 , total_students = 3
Student::add_student() ; // total_students = 4
PartTimeStudent::add_student() ; //total_students_part = 2 , total_students = 5

echo "Total Students : ". "<br />";
echo Student::count() . "<br />";
echo PartTimeStudent::count() . "<br />";

// echo Student::add_student_part() . "<br />"; //Error  Call to undefined method
echo PartTimeStudent::add_student() . "<br />"; //total_students_part = 3 , total_students = 6

echo Student::count() . "<br />";// total_students = 6
echo PartTimeStudent::count() . "<br />"; // total_students = 6
echo PartTimeStudent::count_part() . "<br />"; // total_students_part = 3 , total_students = 6



?>