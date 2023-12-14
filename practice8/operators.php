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

<?php
    echo "<br>";
    echo "PHP Increment / Decrement Operators";
    echo "<br>";
    //++$x
    $x = 10; 

    echo ++$x;
    echo "<br>";

    //$x++
    $x = 10;

    echo $x++;
    echo "<br>";

    //--$x
    $x = 10;  

    echo --$x;
    echo "<br>";

    //$x--
    $x = 10;  

    echo $x--;
    echo "<br>";
?>

<?php
    echo "<br>";
    echo "PHP Logical Operators";
    echo "<br>";
    //and
    echo "<p>Write a message if both conditions are true.</p>";
    $x = 100;  
    $y = 50;

    if ($x == 100 and $y == 50) {
        echo "Hello world!";
    }
    echo "<br>";

    //or
    echo "<p>Write a message if at least one of the conditions are true.</p>";
    $x = 100;  
    $y = 50;

    if ($x == 100 or $y == 80) {
        echo "Hello world!";
    }
    echo "<br>";

    //xor
    echo "<p>Write a message if one of the conditions are true, bot not if both conditions are true.</p>";
    $x = 100;  
    $y = 50;

    if ($x == 100 xor $y == 80) {
        echo "Hello world!";
    }
    echo "<br>";

    //&&
    echo "<p>Write a message if both conditions are true.</p>";
    $x = 100;  
    $y = 50;

    if ($x == 100 && $y == 50) {
        echo "Hello world!";
    }
    echo "<br>";

    //||
    echo "<p>Write a message if at least one of the conditions are true.</p>";
    $x = 100;  
    $y = 50;

    if ($x == 100 || $y == 80) {
        echo "Hello world!";
    }
    echo "<br>";

    //!
    echo "<p>Write a message if the condition is NOT true.</p>";
    $x = 100;  

    if (!($x == 90)) {
        echo "Hello world!";
    }
    echo "<br>";
?>

<?php
    echo "<br>";
    echo "PHP String Operators";
    echo "<br>";
    //.
    $txt1 = "Hello";
    $txt2 = " world!";
    echo $txt1 . $txt2;
    echo "<br>";

    //.=
    $txt1 = "Hello";
    $txt2 = " world!";
    $txt1 .= $txt2;
    echo $txt1;
    echo "<br>";
?>

<?php
    echo "<br>";
    echo "PHP String Operators";
    echo "<br>";
    // +
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  

    print_r($x + $y); // union of $x and $y
    echo "<br>";

    // ==
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  

    var_dump($x == $y);
    echo "<br>";

    // ===
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  

    var_dump($x === $y);
    echo "<br>";

    // !=
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  

    var_dump($x != $y);
    echo "<br>";

    // <>
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  

    var_dump($x <> $y);
    echo "<br>";

    // !==
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  

    var_dump($x !== $y);
    echo "<br>";
?>

<?php
    echo "<br>";
    echo "PHP String Operators";
    echo "<br>";
    // ?:
    // if empty($user) = TRUE, set $status = "anonymous"
    echo $status = (empty($user)) ? "anonymous" : "logged in";
    echo("<br>");

    $user = "John Doe";
    // if empty($user) = FALSE, set $status = "logged in"
    echo $status = (empty($user)) ? "anonymous" : "logged in";
    echo "<br>";

    // ??
    // variable $user is the value of $_GET['user']
    // and 'anonymous' if it does not exist
    echo $user = $_GET["user"] ?? "anonymous";
    echo("<br>");
    
    // variable $color is "red" if $color does not exist or is null
    echo $color = $color ?? "red";
    echo "<br>";
?>