<?php
    echo "<br>";
    echo "PHP switch Statement";
    echo "<br>";

    //The PHP switch Statement
    $favcolor = "red";

    switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
    }
    echo "<br>";

    // The break Keyword
    $favcolor = "red";

    switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
    }
    echo "<br>";

    // The default Keyword
    $d = 4;

    switch ($d) {
    case 6:
        echo "Today is Saturday";
        break;
    case 0:
        echo "Today is Sunday";
        break;
    default:
        echo "Looking forward to the Weekend";
    }
    echo "<br>";

    $d = 4;

    switch ($d) {
    default:
        echo "Looking forward to the Weekend";
        break;
    case 6:
        echo "Today is Saturday";
        break;
    case 0:
        echo "Today is Sunday";
    }
    echo "<br>";

    // Common Code Blocks
    $d = 3;

    switch ($d) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:  
        echo "The week feels so long!";
        break;
    case 6:
    case 0:
        echo "Weekends are the best!";
        break;
    default:
        echo "Something went wrong";
    }
    echo "<br>";
?>