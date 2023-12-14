<?php
    //if
    echo "<br>";
    echo "PHP If";
    echo "<br>";
    if (5 > 3) {
        echo "Have a good day!";
    }
    echo "<br>";

    $t = 14;
    if ($t < 20) {
        echo "Have a good day!";
    }
    echo "<br>";
?>

<?php
    //if operator
    echo "<br>";
    echo "PHP If Operators";

    //Comparison Operators
    echo "<br>";
    echo "Comparison Operators";
    echo "<br>";
    $t = 14;

    if ($t == 14) {
    echo "Have a good day!";
    }
    echo "<br>";

    // ==
    echo "<p>Compare two variables to check if they have the same value.</p>";
    $x = 100;  
    $y = 100;

    if ($x == $y) {
    echo "$x is equal to $y";
    }
    echo "<br>";

    // ===
    echo "<p>Compare two variables to check if they are identical.</p>";
    echo "<p>The identical operator (===) checks the value and the data type, unlike the equal operator (==) that checks only the value.</p>";

    $x = 100;  
    $y = 100;

    if ($x === $y) {
    echo "$x is identical to $y";
    }
    echo "<br>";

    // !=
    echo "<p>Compare two variables and write a message if they don't have the same value.</p>";

    $x = 100;  
    $y = 50;

    if ($x != $y) {
    echo "$x is not equal to $y";
    }
    echo "<br>";

    // <>
    echo "<p>Compare two variables and write a message if echo </p>";
    echo "<p>Compare two variables to check if they have the same value. they don't have the same value.</p>";
    $x = 100;  
    $y = 50;

    if ($x <> $y) {
    echo "$x is not equal to $y";
    }
    echo "<br>";

    // !==
    echo "<p>Compare two variables and write a message if they are NOT identical.</p>";
    echo "<p>The not identical operator (!==) checks the value and the data type, unlike the not equal operator (!=) that checks only the value.</p>";

    $x = 100;  
    $y = 50;

    if ($x !== $y) {
    echo "$x is not identical to $y";
    }
    echo "<br>";

    // >
    echo "<p>Compare two variables and write a message if $ x is greater than $ y.</p>";
    $x = 100;  
    $y = 50;

    if ($x > $y) {
    echo "$x is greater than $y";
    }
    echo "<br>";

    // <
    echo "<p>Compare two variables and write a message if $ y is less than $ x.</p>";
    $x = 100;  
    $y = 50;

    if ($y < $x) {
    echo "$y is less than $x";
    }
    echo "<br>";

    // >=
    echo "<p>Compare two variables and write a message if $ x is greater than, or equal to, $ y.</p>";
    $x = 100;  
    $y = 100;

    if ($x >= $y) {
    echo "$x is greater than, or equal to $y";
    }
    echo "<br>";

    // <=
    echo "<p>Compare two variables and write a message if $ y is less than, or equal to, $ x.</p>";
    $x = 100;  
    $y = 100;

    if ($y <= $x) {
    echo "$y is less than, or equal to $x";
    }
    echo "<br>";
?>

<?php
    //if...else
    echo "<br>";
    echo "If...Else";

    //PHP - The if...else Statement
    echo "<br>";
    echo "PHP - The if...else Statement";
    echo "<br>";

    $t = date("H");

    if ($t < "20") {
    echo "Have a good day!";
    } else {
    echo "Have a good night!";
    }
    echo "<br>";

    //PHP - The if...elseif...else Statement
    echo "<br>";
    echo "PHP - The if...elseif...else Statement";
    echo "<br>";

    $t = date("H");
    echo "<p>The hour (of the server) is " . $t; 
    echo ", and will give the following message:</p>";

    if ($t < "10") {
    echo "Have a good morning!";
    } elseif ($t < "20") {
    echo "Have a good day!";
    } else {
    echo "Have a good night!";
    }
    echo "<br>";
?>

<?php
    echo "<br>";
    echo "PHP Shorthand if Statements";
    echo "<br>";

    //Short Hand If
    $a = 5;

    if ($a < 10) $b = "Hello";

    echo $b;
    echo "<br>";

    // Short Hand If...Else
    $a = 13;

    $b = $a < 10 ? "Hello" : "Good Bye";

    echo $b;
    echo "<br>";

?>

<?php
    echo "<br>";
    echo "PHP Nested if Statement";
    echo "<br>";

    //Nested If
    $a = 13;

    if ($a > 10) {
    echo "Above 10";
    if ($a > 20) {
        echo " and also above 20";
    } else {
        echo " but not above 20";
    }
    }
    echo "<br>";

?>