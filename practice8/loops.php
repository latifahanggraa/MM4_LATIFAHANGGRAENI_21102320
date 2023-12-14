<?php
    echo "<br>";
    echo "PHP while Loop";
    echo "<br>";

    $x = 1;
    
    while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
    }
    echo "<br>";

    $x = 0;
 
    while($x <= 100) {
    echo "The number is: $x <br>";
    $x+=10;
    }
    echo "<br>";
?>

<?php
    echo "<br>";
    echo "PHP do while Loop";
    echo "<br>";

    $x = 1;

    do {
    echo "The number is: $x <br>";
    $x++;
    } while ($x <= 5);
    echo "<br>";

    $x = 6;

    do {
    echo "The number is: $x <br>";
    $x++;
    } while ($x <= 5);
    echo "<br>";
?>

<?php
    echo "<br>";
    echo "PHP for Loop";
    echo "<br>";

    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
      }
    echo "<br>";

    for ($x = 0; $x <= 100; $x+=10) {
        echo "The number is: $x <br>";
      }
    echo "<br>";
?>

<?php
    echo "<br>";
    echo "PHP foreach Loop";
    echo "<br>";

    $colors = array("red", "green", "blue", "yellow"); 

    foreach ($colors as $value) {
    echo "$value <br>";
    }
    echo "<br>";

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach($age as $x => $val) {
    echo "$x = $val<br>";
    }
    echo "<br>";
?>

<?php
    echo "<br>";
    echo "PHP Break and Continue";
    echo "<br>";

    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
          break;
        }
        echo "The number is: $x <br>";
      }
    echo "<br>";

    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
          continue;
        }
        echo "The number is: $x <br>";
      }
    echo "<br>";
?>