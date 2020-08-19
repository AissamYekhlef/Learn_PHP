<?php


class Sofa {
    protected static $identity = 'Safa class';

    public static function identity_test(){
        echo 'self: ' . self::$identity . "<br />";
        echo 'static: ' . static::$identity . "<br />";
    
        echo 'get_class: ' . get_class() . "<br />";
        echo 'get_called_class: ' . get_called_class() . "<br />";
    }
}

class Loveseat extends Sofa {
    protected static $identity = 'Loveseat class';
}
echo "Sofa Class : <br />";
Sofa::identity_test();
// Sofa Class :
// self: Safa class
// static: Safa class
// get_class: Sofa
// get_called_class: Sofa

echo '<hr>';

echo "Loveseat Class : <br />";
Loveseat::identity_test();
// Loveseat Class :
// self: Safa class
// static: Loveseat class
// get_class: Sofa
// get_called_class: Loveseat


?>