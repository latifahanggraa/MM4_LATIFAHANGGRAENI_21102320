<?php

    //Creating (Declaring) PHP Variables
    $x = 5;
    $y = "John"

?>
<?php
    //Output Variables
    $txt = "W3Schools.com<br>";
    echo "I love $txt!";


    $txt = "W3Schools.com<br>";
    echo "I love " . $txt . "!";

    $x = 5;
    $y = 4;
    echo $x + $y;

    //Variable Types
    $x = 5;      // $x is an integer
    $y = "John"; // $y is a string
    echo $x;
    echo $y;

    //Get the Type
    $x = 5;
    var_dump($x);

    var_dump(5);
    var_dump("John");
    var_dump(3.14);
    var_dump(true);
    var_dump([2, 3, 56]);
    var_dump(NULL);

    //Assign String to a Variable
    $x = "John";
    echo $x;

    //Assign Multiple Values
    $x = $y = $z = "Fruit";

    //==============================================
    //PHP Variables Scope
    //Global and Local Scope
    $x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

function myTest2() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
  }
  myTest2();
  
  // using x outside the function will generate an error
  echo "<p>Variable x outside function is: $x</p>";

  
//PHP The global Keyword
$x = 5;
$y = 10;

function myTest3() {
  global $x, $y;
  $y = $x + $y;
}

myTest3();
echo $y; // outputs 15

$x = 5;
$y = 10;

function myTest4() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest4();
echo $y; // outputs 15

//PHP The static Keyword
function myTest5() {
    static $x = 0;
    echo $x;
    $x++;
  }
  
  myTest5();
  myTest5();
  myTest5();
?>