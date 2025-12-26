<?php

class destructor01
{
    public function __construct()
    {
        echo "This is Constructor Function<br>";
    }

    public function show()
    {
        echo "Hello Everyone<br>";
    }

    public function __destruct()
    {
        echo "This is Destructor Function";
    }
}

$test = new destructor01();

$test->show();
