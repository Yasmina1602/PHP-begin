<?php
    // begin 1 
    $a = 24;
    $perimeter = 4 * $a;
    echo " begin 1 -> perimeter= ".$perimeter;
    
    // begin 2
    $surface = $a**2;
    echo "\n begin 2 -> surface = ".$surface;
    
    // begin 3
    $x = 10;
    $y = 20;
    $s = $x * $y;
    $p = 2 * ($x + $y);
    echo "\n begin 3 -> surface = ".$s.", perimeter = ".$p;
    
    // begin 4
    define("pi", 3.14);
    $diameter = 10;
    echo "\n begin 4 -> length = ".$diameter * pi;
    
    // begin 5
    $cube = 16;
    $volume = $cube**3;
    $full_surface = 6 * $cube**2;
    echo "\n begin 5 -> volume = ".$volume.", full surface = ".$full_surface;
    
    // begin 6
    $a_side = 2;
    $b_side = 4;
    $c_side = 5;
    $V = $a_side * $b_side * $c_side;
    $S = 2 * ($a_side * $b_side + $b_side * $c_side + $a_side * $c_side);
    echo "\n begin 6 -> volume = ".$V.", full surface = ".$S;
    
    // begin 7
    $r = 12;
    echo "\n begin 7 -> length = ".$r * 2 * pi.", surface = ".$r**2 * pi;
    
    // begin 8
    $A = 10;
    $B = 26;
    echo "\n begin 8 -> middle arithmetic = ".($A + $B) / 2;

    // begin 9
     echo "\n begin 9 -> middle geometry = ".round(sqrt($A * $B));
     
     // begin 10
    echo "\n begin 10 -> $A + $B = ".($A + $B).
     ", $A * $B = ".($A * $B).
     ", $A^2 = ".($A ** 2).
     ", $B^2 = ".($B ** 2);
?>