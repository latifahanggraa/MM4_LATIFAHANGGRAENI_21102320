<?php
echo "<br>";
echo "PHP Arrays";
echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";

//Get The Length of an Array - The count() Function
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";

echo "<br>";
echo "Index Arrays";
echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";

//Loop Through an Indexed Array
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

echo "<br>";
echo "Associative Arrays";
echo "<br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br>";

//Loop Through an Associative Array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

echo "<br>";
echo "Multidimensional Arrays";
echo "<br>";

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
    
  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
  echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
  echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
  echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";


for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }

  echo "<br>";
  echo "Sorting Arrays";
  echo "<br>";
  
  $cars = array("Volvo", "BMW", "Toyota");
  sort($cars);
  
  $clength = count($cars);
  for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
  }
  echo "<br>";
  

  $numbers = array(4, 6, 2, 22, 11);
  sort($numbers);
  
  $arrlength = count($numbers);
  for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
  }
?>