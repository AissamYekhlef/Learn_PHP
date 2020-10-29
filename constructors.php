<?php

// magic methods
// __construct() called whene we create an new instance 
// __destuct() called :
// - in the fin of the php script
// - unset($objet_name)
// - replace object by the another object

class sofa {

    public static $instance_count = 0;

    public $seats = 3;
    public $arms = 2;

    public function __construct($args=[]) {
        static::$instance_count++; // static for increment by 1 in class static var not in the parent.
        $this->seats = $args['seats'] ?? $this->seats . ' default '; 
        $this->arms = $args['arms'] ?? $this->arms . ' default ';
    }

    public function __destruct(){
        static::$instance_count--;
        echo "BYE!<br />";
    }

}

class Couch extends Sofa {
    var $arms = 0;
    public static $instance_count = 0;

    public function __construct($seats = 2, $arms = 2) {
        static::$instance_count++; // static for increment by 1 in class static var not in the parent.
        $this->seats = $seats; 
        $this->arms = $arms; 

    }

}

class Loveseat extends Sofa {
    var $seats = 8;
    public static $instance_count = 0;


}

$sofa = new sofa(['seats' => 5, 'arms' => 5]);// instance_count = 1 
echo "Sofa <br />";
echo "- seats: " . $sofa->seats . "<br />";
echo "- arms: " . $sofa->arms . "<br />";
echo "<br />";
$sofa2 = new sofa();// instance_count = 2 
echo "Sofa <br />";
echo "- seats: " . $sofa2->seats . "<br />";
echo "- arms: " . $sofa2->arms . "<br />";
echo "<br />";


$c = new Couch(12, 12); // instance_count_couch = 1 
echo "Couch <br />";
echo "- seats: " . $c->seats . "<br />";
echo "- arms: " . $c->arms . "<br />";
echo "<br />";

$f = new Couch(); // instance_count_couch = 2
echo "Couch <br />";
echo "- seats: " . $f->seats . "<br />";
echo "- arms: " . $f->arms . "<br />";
echo "<br />";

$d = new Couch; // instance_count_couch = 3
echo "Couch <br />";
echo "- seats: " . $d->seats . "<br />";
echo "- arms: " . $d->arms . "<br />";
echo "<br />";

unset($d); // called to __destruct() magic method 


$l = new Loveseat(['seats' => 100, 'arms' => 100]); // instance_count_couch = 1
echo "Loveseat <br />";
echo "- seats: " . $l->seats . "<br />";
echo "- arms: " . $l->arms . "<br />";
echo "<br />";

$l2 = new Loveseat(['seats' => 50, 'arms' => 50]); // instance_count_couch = 2
echo "Loveseat <br />";
echo "- seats: " . $l2->seats . "<br />";
echo "- arms: " . $l2->arms . "<br />";
echo "<br />";

$l2 = new Loveseat; // instance_count_couch = 3 // called to __destruct() magic method the same var name $l2
echo "Loveseat <br />";
echo "- seats: " . $l2->seats . "<br />";
echo "- arms: " . $l2->arms . "<br />";
echo "<br />";



echo "instance_count_sofa: " . Sofa::$instance_count . "<br />";
echo "instance_count_couch: " . Couch::$instance_count . "<br />";
echo "instance_count_loveseat: " . Loveseat::$instance_count . "<br />";


?>

