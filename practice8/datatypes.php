<?php
    //Getting the Data Type
    $x = 5;
    var_dump($x);

    //PHP String
    $x = "Hello world!";
    $y = 'Hello world!';

    var_dump($x);
    echo "<br>";
    var_dump($y);

    //PHP Integer
    $x = 5985;
    var_dump($x);

    //PHP Float
    $x = 10.365;
    var_dump($x);

    //PHP Boolean
    $x = true;
    var_dump($x);

    //PHP Array
    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);

    //PHP Object
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
          $this->color = $color;
          $this->model = $model;
        }
        public function message() {
          return "My car is a " . $this->color . " " . $this->model . "!";
        }
      }
      
      $myCar = new Car("red", "Volvo");
      var_dump($myCar);

    //PHP NULL Value
    $x = "Hello world!";
    $x = null;
    var_dump($x);

    //Change Data Type
    $x = 5;
    var_dump($x);

    $x = "Hello";
    var_dump($x);

    $x = 5;
    $x = (string) $x;
    var_dump($x);

    
?>