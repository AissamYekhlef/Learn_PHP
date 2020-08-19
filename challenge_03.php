<?php 

class Bicycle {

    // vars
    var $brand ;
    var $model ;
    var $year ;
    var $description = 'Used Bicycle' ;
    var $weight_kg = 0.0;

    // methods
    function name(){
        return "Bicycle => [ Brand : " . $this->brand .", Model : " . $this->model . ", Year : " . $this->year . " ]"; 
    }

    function weight_lbs(){
        return floatval( $this->weight_kg) * 2.2046226218 ;
        // return $this->weight_kg * 2 ;
    }

    function set_weight_lbs($weight_lbs){
        return $this->weight_kg = ($weight_lbs / 2.2046226218);
        // return $this->weight_kg = ($weight_lbs / 2);
    }
}


$b1 = new Bicycle;
$b1->brand = 'btwin';
$b1->model = 'bb2';
$b1->year = '2017';
$b1->description = 'good state bicycle.';


$b2 = new Bicycle;
$b2->brand = 'ciram';
$b2->model = 'ciram L';
$b2->year = '2019';
$b2->description = 'good bicycle.';

$bicycles = [$b1, $b2];

echo "<pre>";
print_r($bicycles);
echo "</pre>";
  

$b1->name();
$b1->weight_lbs();
$b1->set_weight_lbs(10);



echo "<br />After Change the vars <br />";
echo "<pre>";
print_r($bicycles);
echo "</pre>";

echo  "<br />" .
" Bicycle Name : " . $b1->name() . "<br />" .
" Weight_lbs : " . $b1->weight_lbs() . "<br />" .
" New Weight : " . $b1->set_weight_lbs(10);
  

?>