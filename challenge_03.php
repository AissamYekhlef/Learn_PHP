<?php 

class Bicycle {

    // properties 
    protected $brand ;
    protected $model ;
    protected $year ;
    protected $description = 'Used Bicycle' ;
    private $weight_kg  = 0.0;
    protected $wheels = 2;

    // methods
    public function name(){
        return "Bicycle => [ Brand : " . $this->brand .", Model : " . $this->model . ", Year : " . $this->year . " ]"; 
    }

    public function wheel_details(){
        $wheel_string =  $this->weight_kg == 1 ? '1 wheel': "{$this->wheels} wheels"; 
        return "it has ".$wheel_string;
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
        return "<br /> Bicycle : " . "<br />" .
        "brand : ". $this->brand()  . "<br />" .
        "model : ". $this->model()  . "<br />" .
        "description : " . $this->description()  . "<br />" .
        "weight_kg : ". $this->weight_kg()  . "<br />" .
        "wheels : ". $this->wheel_details()  . "<br />"  ;
    }
    
}


class Unicycle extends Bicycle {
    // visibility must match property being overridden
    protected $wheels = 1;

    public function bug_test(){
        // return $this->weight_kg; //bug test undefined property Unicycle::$weight_kg
        return $this->weight_kg();
    }
}

$b1 = new Bicycle;
$b1->set_brand('btwin');
$b1->set_model('bb2');
$b1->set_year('2017');
$b1->set_weight_kg(10);
$b1->set_description('good state bicycle.');


$u = new Unicycle;
$u->set_brand('brand2');
$u->set_model('model2');
$u->set_year('2019');
$u->set_weight_kg(6);
$u->set_description('good Uniycle.');

// $bicycles = [$b1, $u];

// echo "<pre>";
// print_r($bicycles);
// echo "</pre>";
  
// echo "###################";
// $b1->name();
// $b1->weight_lbs();
// $b1->set_weight_lbs(10);



// echo "<br />After Change the vars <br />";
// echo "<pre>";
// print_r($bicycles);
// echo "</pre>";


echo  "<br />" .
" Bicycle Name : " . $b1->name() . "<br />" .
" Weight_lbs : " . $b1->weight_lbs() . "<br />" ;

// $b1->set_weight_lbs(10);
// echo " New Weight : " . $b1->weight_lbs();
 
echo  "<hr>" ; 

echo "<br /><br />";
echo "To String";
echo $b1->toString();
echo $u->toString();
 
echo  "<hr>" ; 
echo  "Bug TEST : " . $u->bug_test(); 

?>