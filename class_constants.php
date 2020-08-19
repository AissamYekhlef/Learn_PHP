<?php

class Clock {

    public const DAY_IN_MINUTES = 60 * 24;
    public const DAY_IN_SECONDS = 60 * 60 * 24;

    public function tommorow(){
        return time() + self::DAY_IN_SECONDS;
    }

}

echo " Day In Minutes: " . Clock::DAY_IN_MINUTES . "<br />";
echo " Day In Seconds: " . Clock::DAY_IN_SECONDS . "<br />";

echo time();

echo "<br />";
$c = new Clock;
echo $c->tommorow();

?>