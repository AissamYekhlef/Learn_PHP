<?php

// the cloning is copied al  l the properties and methodes from an object to another 
// __clone() method called when we use clone keyword #a = clone $b 

class Animal {
    public $name;
    public function __construct(){
        echo "New Animal was created.<br />";
    }

    public function __clone(){
        echo "Existing Animal was copied.<br />";
    }

}


$a = new Animal;
$a->name = "cat";
echo $a->name . "<br />";
// New Animal was created.
// cat
echo "<hr />";

$b = clone $a;
echo $b->name . "<br />";
// Existing Animal was copied.
// cat
echo "<hr />";

$a->name = 'rat';
echo $a->name . "<br />";
//rat
echo $b->name . "<br />";
//cat

echo "<hr />";

$c = $b ; // referance to same object means the same piece of memory in the php memory
$b->name = 'python';
echo $a->name . "<br />";
echo $b->name . "<br />";
echo $c->name . "<br />";
// rat
// python
// python

echo "<hr />";

$d = clone $b;
$b->name = 'zero';
echo $a->name . "<br />";
echo $b->name . "<br />";
echo $c->name . "<br />";
echo $d->name . "<br />";
// Existing Animal was copied.
// rat
// zero
// zero
// python

echo "<hr />";

$bool =  $c == $b ? ' true ' : ' false '; // the same referance
echo "c == b : " . $bool . "<br />";
// true

$bool =  $c === $b ? ' true ' : ' false ';
echo "c === b : " . $bool . "<br />";
// true

$c->name = 'another';
$bool =  $c === $b ? ' true ' : ' false ';
echo "c === b : " . $bool . "<br />";

$f = clone $b;
$bool =  $f == $b ? ' true ' : ' false ';
echo "f == b : " . $bool . "<br />";
// true

$bool =  $f === $b ? ' true ' : ' false ';
echo "f === b : " . $bool . "<br />";
// false

$f->name = 'another one';
$bool =  $f == $b ? ' true ' : ' false ';
echo "f == b : " . $bool . "<br />";
// false not the same properties 'another one' != 'another'

?>