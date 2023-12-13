<?php
    //PHP Numbers
    $a = 5;
    $b = 5.34;
    $c = "25";

    var_dump($a);
    var_dump($b);
    var_dump($c);

    //PHP Integers
    $x = 5985;
    var_dump(is_int($x));

    $x = 59.85;
    var_dump(is_int($x));

    //PHP Floats
    $x = 10.365;
    var_dump(is_float($x));

    //PHP Infinity
    $x = 1.9e411;
    var_dump($x);

    //PHP NaN
    $x = acos(8);
    var_dump($x);

    //PHP Numerical Strings
    $x = 5985;
    var_dump(is_numeric($x));

    $x = "5985";
    var_dump(is_numeric($x));
    $x = "59.85" + 100;
    var_dump(is_numeric($x));

    $x = "Hello";
    var_dump(is_numeric($x));

    //PHP Casting Strings and Floats to Integers
    // Cast float to int
    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;

    echo "<br>";

    // Cast string to int
    $x = "23465.768";
    $int_cast = (int)$x;
    echo $int_cast;

    

?>