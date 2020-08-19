<?php

// Student::$total_students by calling the Class_name
// self::$total_students by calling the self key word
// parent::$total_students by calling the parent

// Example of extanding parent's static method
// Aadd code before, after, or around
class Chef {

    public static function make_dinner(){
        echo "Cook food .<br />";
    }

}

class AmatuerChef extends Chef {

    public static function make_dinner(){
        echo "Read recipe .<br />";
        parent::make_dinner();
        echo "Clean up mess.<br />";

    }
}

Chef::make_dinner();
echo '<br>';
AmatuerChef::make_dinner();

// Example of using parent's static method as a fallback

class Image {
    public static $resizing_enabled = true;

    public static function geometry(){
        echo "800x600";
    } 

}

class ProfileImage extends Image{

    public static function geometry(){
        if(self::$resizing_enabled){
            echo "100x100";
        }else {
            parent::geometry();
        }
    } 

}

echo Image::geometry() . "<br>";
echo ProfileImage::geometry() . "<br>";

Image::$resizing_enabled = false;

echo Image::geometry() . "<br>";
echo ProfileImage::geometry() . "<br>";


?>