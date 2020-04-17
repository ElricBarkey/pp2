<?php
    /*
     * Elric Barkey
     * 4/17/2020
     * http://ebarkey.greenriverdev.com/328/pp2/index.php
     * Pair program 2
     */

    // Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
?>

<?php

    echo "PHP Array Practice";
    echo "<br>";

    $numbers = array(7, 9, 8, 9, 8, 8, 6);

    function printArr($myArr)
    {
        foreach ($myArr as $item)
        {
            echo $item . "<br>";
        }
    }

    printArr($numbers);
