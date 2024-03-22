<?php
    // integer 1
    $length = 116622;
    echo "integer 1 -> ".$length." metr = ".floor($length / 100)." cm\n";
    
    // integer 2
    $kilo = 662211;
    echo "integer 2 -> ".$kilo." tonna = ".floor($kilo / 1000)." tonna\n";

    // integer 3
    $bayt = 226611;
    echo "integer 3 -> ".$bayt." bayt = ".floor($bayt / 1024)." kb\n";
    
    // integer 4
    $a = 100;
    $b = 16;
    echo "integer 4 -> ".floor($a / $b)." times \n";
    
    // integer 5
    $a = 100;
    $b = 16;
    echo "integer 5 -> ".$a % $b." residual \n";
    
    // integer 6
    $a = 96;
    echo "integer 6 -> number = ".$a.", first digit = ".floor($a / 10).", second digit = ".$a % 10;
    
    // integer 7
    $a = 61;
    echo "\ninteger 7 -> number = ".$a.", sum of digits = ".floor($a / 10) + $a % 10;

    // integer 8
    $a = 36;
    $b = $a % 10 * 10 + floor($a / 10);
    echo "\ninteger 8 -> number = ".$a.", exchange numbers = ".$b;
   
    // integer 9
    $a = 826;
    echo "\ninteger 9 -> ".$a." first digit = ".floor($a / 100);

    // integer 10
    $a = 826;
    echo "\ninteger 10-> ".$a." second digit = ".floor($a % 100 / 10).", third digit = ".($a % 10);
?>