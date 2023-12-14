<?php
    echo "<br>";
    echo "PHP User Defined Functions";
    echo "<br>";
    //Create a Function
    function myMessage() {
        echo "Hello world!";
    }

    //Call a Function
    function myMessage1() {
        echo "Hello world!";
    }
    
    myMessage1();
    echo "<br>";

    echo "<br>";
    echo "PHP Function Arguments";
    echo "<br>";
    function familyName($fname) {
        echo "$fname Refsnes.<br>";
    }
    
    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
    familyName("Kai Jim");
    familyName("Borge");
    echo "<br>";

    function familyName1($fname, $year) {
        echo "$fname Refsnes. Born in $year <br>";
      }
      
      familyName1("Hege", "1975");
      familyName1("Stale", "1978");
      familyName1("Kai Jim", "1983");

    echo "<br>";
    echo "PHP Default Argument Value";
    echo "<br>";
    function setHeight($minheight = 50) {
        echo "The height is : $minheight <br>";
      }
      
      setHeight(350);
      setHeight(); // will use the default value of 50
      setHeight(135);
      setHeight(80);
    
    echo "<br>";
    echo "PHP Functions - Returning values";
    echo "<br>";
    function sum($x, $y) {
        $z = $x + $y;
        return $z;
      }
      
      echo "5 + 10 = " . sum(5, 10) . "<br>";
      echo "7 + 13 = " . sum(7, 13) . "<br>";
      echo "2 + 4 = " . sum(2, 4);

    echo "<br>";
    echo "Passing Arguments by Reference";
    echo "<br>";
    function add_five(&$value) {
        $value += 5;
      }
      
      $num = 2;
      add_five($num);
      echo $num;

    echo "<br>";
    echo "Variable Number of Arguments";
    echo "<br>";
    function sumMyNumbers(...$x) {
        $n = 0;
        $len = count($x);
        for($i = 0; $i < $len; $i++) {
          $n += $x[$i];
        }
        return $n;
      }
      
      $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
      echo $a;
      echo "<br>";
    
    function myFamily($lastname, ...$firstname) {
        $txt = "";
        $len = count($firstname);
        for($i = 0; $i < $len; $i++) {
          $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
        }
        return $txt;
      }
      
      $a = myFamily("Doe", "Jane", "John", "Joey");
      echo $a;

    echo "<br>";
    echo "PHP is a Loosely Typed Language";
    echo "<br>";
    function addNumbers(int $a, int $b) {
        return $a + $b;
      }
    echo addNumbers(5, 5);
      // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
      echo "<br>";
    
    echo "<br>";
    echo "PHP Return Type Declarations";
    echo "<br>";
?>