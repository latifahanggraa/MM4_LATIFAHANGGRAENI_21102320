<?php
    echo "<br>";
    echo "Using preg_match()";
    echo "<br>";

    $str = "Visit W3Schools";
    $pattern = "/w3schools/i";
    echo preg_match($pattern, $str); 
    echo "<br>";

    echo "<br>";
    echo "Using preg_match_all()";
    echo "<br>";

    $str = "The rain in SPAIN falls mainly on the plains.";
    $pattern = "/ain/i";
    echo preg_match_all($pattern, $str); 
    echo "<br>";

    echo "<br>";
    echo "Using preg_replace()";
    echo "<br>";

    $str = "Visit Microsoft!";
    $pattern = "/microsoft/i";
    echo preg_replace($pattern, "W3Schools", $str);
    echo "<br>";

    echo "<br>";
    echo "Grouping";
    echo "<br>";

    $str = "Apples and bananas.";
    $pattern = "/ba(na){2}/i";
    echo preg_match($pattern, $str);
    echo "<br>";
?>