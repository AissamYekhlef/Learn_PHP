<?php

// Functions for Inheritance
// get_parent_class(mixed $object)
// is_subclass_of(mixed $object, string $class_name)
// class_parents(mixed $class)

class Person {

}


class User extends Person {

    var $is_admin = false;
    var $first_name;
    var $last_name;
    var $username;

    function full_name(){
        return $this->first_name . " " . $this->last_name;
    }

}

class AdminUser extends User {
    var $is_admin = true;

    function full_name(){
        return $this->first_name . " " . $this->last_name . ' (Admin)';
    }

}

class Customer extends User {
    var $city;
    var $state;
    var $country;

    function location(){
        return $this->city . ", " . $this->state . ", " . $this->country ;
    }
}

$u = new User;
$u->first_name = 'Amer';
$u->last_name = 'Saloum';
$u->username = 'Amersal';


$c = new Customer;
// attributes from the parent class
$c->first_name = 'mostafa';
$c->last_name = 'falin';
$c->username = 'mostafafal';
// attributes from the current class
$c->city = 'mila';
$c->state = 'mila';
$c->country = 'Algeria';

echo ' Location : ' . $c->location();

echo '<br />';

echo $u->full_name() . '<br />';
echo $c->full_name() . '<br />';

echo '<br />';

echo $u->username . '<br />';
echo $c->username . '<br />';

echo '<br />';

$class_name = 'Customer';
echo 'parent class of ' . $class_name . ' is ' . get_parent_class($c) . '<br />'; // or get_parent_class('Customer')

$class_name = 'User';
echo 'parent class of ' . $class_name . ' is ' . get_parent_class($u) . '<br />';
echo $u->username . '<br />';

if (is_subclass_of($c, 'User')) {
    echo get_class($c) . ' is subclass of ' . get_class($u);
}

echo '<br /><br />';
$parents = class_parents($c);
echo 'Parents class of ' . get_class($c) . ' are : [ ' . implode(', ', $parents) . ' ]'; 



$u = new AdminUser;
$u->first_name = 'Aissa';
$u->last_name = 'Jamel';
$u->username = 'Admin1';

echo '<br />';

echo $u->full_name() . '<br />';
echo $c->full_name() . '<br />';


?>