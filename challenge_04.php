<?php

class Bicycle {

    // properties 
    protected static $instance_count = 0;
    protected static $total_instance_count = 0;
    protected $brand ;
    protected $model ;
    protected $year ;
    protected $description = 'Used Bicycle' ;
    private $weight_kg  = 0.0;
    protected static $wheels = 2;
    public $category;
    
    public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];

    // methods
    public static function create(){
        $class_name = get_called_class(); // must retrieve string first
        $o = new $class_name; // "new" expects a class or a string
        // $o = new static; // self & static work here too!

        static::$instance_count++;
        self::$total_instance_count++;

        return $o;
    }



    public static function instance_count(){
        return static::$instance_count++;
    }
    
    public static function total_instance_count(){
        return self::$total_instance_count++;
    }

    public static function wheel_details(){
        $wheel_string = static::$wheels == 1 ? '1 wheel': "{" . static::$wheels . "} wheels"; 
        return "it has ".$wheel_string;
    }

    public function name(){
        return "Bicycle => [ Brand : " . $this->brand .", Model : " . $this->model . ", Year : " . $this->year . " ]"; 
    }

  
    public function weight_lbs(){
        return floatval( $this->weight_kg) * 2.2046226218 . " lbs" ;
    }

    public function set_weight_lbs($weight_lbs){
     $this->weight_kg = ($weight_lbs / 2.2046226218);
    }

    
    public function weight_kg(){
        return $this->weight_kg . " Kg" ;
    }

    public function set_weight_kg($value){
        $this->weight_kg = $value;
    }

    public function brand(){
        return $this->brand ;
    }

    public function set_brand($value){
        $this->brand = $value;
    }

    public function model(){
        return $this->model ;
    }

    public function set_model($value){
        $this->model = $value;
    }

    public function year(){
        return $this->year ;
    }

    public function set_year($value){
        $this->year = $value;
    }
    public function description(){
        return $this->description ;
    }

    public function set_description($value){
        $this->description = $value;
    }

    public function toString(){
        return "<br /> ". get_called_class() ." : " . "<br />" .
        "brand : ". $this->brand()  . "<br />" .
        "model : ". $this->model()  . "<br />" .
        "description : " . $this->description()  . "<br />" .
        "weight_kg : ". $this->weight_kg()  . "<br />" .
        "wheels : ". $this->wheel_details()  . "<br />"  ;
    }
    
}


class Unicycle extends Bicycle {
    // visibility must match property being overridden
    protected static $wheels = 1;
    protected static $instance_count = 0;

    public function bug_test(){
        // return $this->weight_kg; //bug test undefined property Unicycle::$weight_kg
        return $this->weight_kg();
    }
}
// create Bicycle objects from the create static method
$bike = Bicycle::create();// instance_count = 1; total_instance_count = 1;
Bicycle::create();// instance_count = 2; total_instance_count = 2;
Bicycle::create();// instance_count = 3; total_instance_count = 3;

$bike->category = Bicycle::CATEGORIES[0];

echo "Bicycle Count : " . Bicycle::instance_count();
echo "<br />";

echo "CATEGORIES : " . implode(', ', Bicycle::CATEGORIES);

echo "<br />";
echo "Category : " . $bike->category;
// instance_count = 3

echo "<br />";
echo "wheel_details : " . Bicycle::wheel_details();

echo "<hr>";

// create Unicycle objects from the create static method
$unic = Unicycle::create();// instance_count = 1; total_instance_count = 4;
Unicycle::create();// instance_count = 2; total_instance_count = 5;
Unicycle::create();// instance_count = 3; total_instance_count = 6;
Unicycle::create();// instance_count = 4; total_instance_count = 7;

echo "Unicycle Count : " . Unicycle::instance_count();
// instance_count = 4
echo "<br />";

echo "wheel_details : " . Unicycle::wheel_details();


echo "<br /><br />";
echo "Total Count Bicycles + Unicycle : " . Unicycle::total_instance_count();
// total_instance_count = 7;

Logger::log('sdfg');
?>