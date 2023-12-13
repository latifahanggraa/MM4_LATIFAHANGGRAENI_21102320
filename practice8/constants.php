<?php
    //Create a PHP Constant
    define("GREETING", "Welcome to W3Schools.com!");
    echo GREETING;

   ?>

   <?php
    define("GREETING", "Welcome to W3Schools.com!", true);
    echo GREETING;
   ?>

   <?php
    //PHP const Keyword
    const MYCAR = "Volvo";
    echo MYCAR;

    //PHP Constant Arrays
    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
      ]);
      echo cars[0];

    //Constants are Global
    define("GREETING", "Welcome to W3Schools.com!");

    function myTest() {
    echo GREETING;
    }

    myTest();

?>