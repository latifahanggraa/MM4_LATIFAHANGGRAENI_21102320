<?php
    //PHP Strings
    //Strings
    echo "Hello";
    echo 'Hello';

    $x = "John";
    echo "Hello $x";

    $x = "John";
    echo 'Hello $x';

    //String Length
    echo strlen("Hello world!");

    //Word Count
    echo str_word_count("Hello world!");

    //Search For Text Within a String
    echo strpos("Hello world!", "world");

?>

<?php
    //PHP - Modify Strings
    //Upper Case
    $x = "Hello World!";
    echo strtoupper($x);

    //Lower Case
    $x = "Hello World!";
    echo strtolower($x);

    //Replace String
    $x = "Hello World!";
    echo str_replace("World", "Dolly", $x);

    //Reverse a String
    $x = "Hello World!";
    echo strrev($x);

    //Remove Whitespace
    $x = " Hello World! ";
    echo trim($x);

    //Convert String into Array
    $x = "Hello World!";
    $y = explode(" ", $x);

    //Use the print_r() function to display the result:
    print_r($y);

    /*
    Result:
    Array ( [0] => Hello [1] => World! )
    */
?>

<?php
    //PHP - Concatenate Strings
    //String Concatenation
    $x = "Hello";
    $y = "World";
    $z = $x . $y;
    echo $z;

    $x = "Hello";
    $y = "World";
    $z = $x . " " . $y;
    echo $z;

    $x = "Hello";
    $y = "World";
    $z = "$x $y";
    echo $z;
?>

<?php
    //PHP - Slicing Strings
    //Slicing
    $x = "Hello World!";
    echo substr($x, 6, 5);

    //Slice to the End
    $x = "Hello World!";
    echo substr($x, 6);

    //Slice From the End
    $x = "Hello World!";
    echo substr($x, -5, 3);

    //Negative Length
    $x = "Hello World!";
    echo substr($x, 5, -3);

?>

<?php
    //PHP - Escape Characters
    //Escape Character
    //$x = "We are the so-called "Vikings" from the north.";
    echo $x;

    //ini yang ga error
    $x = "We are the so-called \"Vikings\" from the north.";
    echo $x;

?>