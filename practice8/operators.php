<?php
    //PHP Arithmetic Operators
    echo "PHP Arithmetic Operators";
    echo "<br>";
    //+
    $x = 10;  
    $y = 6;

    echo $x + $y;

    echo "<br>";

    //-
    $x = 10;  
    $y = 6;

    echo $x - $y;
    echo "<br>";

    //*
    $x = 10;  
    $y = 6;

    echo $x * $y;
    echo "<br>";

    //	$x / $y
    $x = 10;  
    $y = 6;

    echo $x / $y;
    echo "<br>";

    // %
    $x = 10;  
    $y = 6;

    echo $x % $y;
    echo "<br>";

    // **
    $x = 10;  
    $y = 3;

    echo $x ** $y;
    echo "<br>";
    echo "<br>";
?>

<?php
    //PHP Assignment Operators
    echo "PHP Assignment Operators";
    echo "<br>";
    //x = y
    $x = 10;  
    echo $x;
    echo "<br>";

    //x += y
    $x = 20;  
    $x += 100;

    echo $x;
    echo "<br>";

    //x -= y
    $x = 50;
    $x -= 30;

    echo $x;
    echo "<br>";

    //x *= y
    $x = 50;
    $x -= 30;

    echo $x;
    echo "<br>";

    //x /= y
    $x = 10;
    $x /= 5;

    echo $x;
    echo "<br>";

    //x %= y
    $x = 15;
    $x %= 4;

    echo $x;
    echo "<br>";

?>

<?php
    echo "<br>";
    echo "PHP Comparison Operators";
    echo "<br>";
    //==
    $x = 100;  
    $y = "100";

    var_dump($x == $y); // returns true because values are equal

    echo "<br>";
    //===
    $x = 100;  
    $y = "100";

    var_dump($x === $y); // returns false because types are not equal
    echo "<br>";

    //!=
    $x = 100;  
    $y = "100";

    var_dump($x != $y); // returns false because values are equal
    echo "<br>";

    //<>
    $x = 100;  
    $y = "100";

    var_dump($x <> $y); // returns false because values are equal
    echo "<br>";

    //!==
    $x = 100;  
    $y = "100";

    var_dump($x <> $y); // returns false because values are equal
    echo "<br>";

    //>
    $x = 100;
    $y = 50;

    var_dump($x > $y); // returns true because $x is greater than $y
    echo "<br>";

    //<
    $x = 10;
    $y = 50;

    var_dump($x < $y); // returns true because $x is less than $y
    echo "<br>";

    //>=
    $x = 50;
    $y = 50;

    var_dump($x >= $y); // returns true because $x is greater than or equal to $y
    echo "<br>";

    //<=
    $x = 50;
    $y = 50;

    var_dump($x <= $y); // returns true because $x is less than or equal to $y
    echo "<br>";

    //<=>
    $x = 5;  
    $y = 10;

    echo ($x <=> $y); // returns -1 because $x is less than $y
    echo "<br>";

    $x = 10;  
    $y = 10;

    echo ($x <=> $y); // returns 0 because values are equal
    echo "<br>";

    $x = 15;  
    $y = 10;

    echo ($x <=> $y); // returns +1 because $x is greater than $y
    echo "<br>";
?>