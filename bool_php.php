<?php
    // bool 25
    $x = -10;
    $y = -10;
    $c = $x < 0 && $y > 0;
    echo "\n koordinataning 2-sida yotadimi -> ";
    if($c)
        echo $c;
    else 
        echo 0;
        
    // bool 26
    $x = -10;
    $y = -10;
    $c = $x < 0 && $y < 0;
    echo "\n koordinataning 4-sida yotadimi -> ";
    if($c)
        echo $c;
    else 
        echo 0;    
        
    // bool 27
    $x = 10;
    $y = -10;
    $c = ($x > 0 && $y < 0)||($x < 0 && $y > 0);
    echo "\n koordinataning 2-si yoki 3-sida yotadimi -> ";
    if($c)
        echo $c;
    else 
        echo 0;
    
    // bool 28
    $x = 10;
    $y = 10;
    $c = ($x > 0 && $y > 0)||($x > 0 && $y < 0);
    echo "\n koordinataning 1-si yoki 3-sida yotadimi -> ";
    if($c)
        echo $c;
    else 
        echo 0;
        
    // bool 29
    $x = 2; $y = 2;
    $x1 = -2; $y1 = 4;
    $x2 = 4; $y2 = -2;
    $c = $x1 < $x && $x2 > $x && $y1 > $y && $y2 < $y;
    echo "\n x, y koordinata to'rtburchak ichida yotadimi -> ";
    if($c)
        echo $c;
    else 
        echo 0;
        
    // bool 30
    $a = 14;
    $b = 16;
    $c = 16;
    $c = ($a==$b)&&($a==$c)&&($b==$c);
    echo "\n uchburchak teng tomonli bo'ladimi -> ";
    if($c)
        echo $c;
    else 
        echo 0;
        
    // bool 31
    $a = 14;
    $b = 14;
    $c = 14;
    $c = ($a==$b)||($a==$c)||($b==$c);
    echo "\n uchburchak teng yonli bo'ladimi -> ";
    if($c)
        echo $c;
    else 
        echo 0;
        
    // bool 32
    $a = 3;
    $b = 4;
    $c = 5;
    $c = pow($a,2) == pow($c,2)+pow($b,2) ||
         pow($b,2) == pow($a,2)+pow($c,2) ||
         pow($c,2) == pow($a,2)+pow($b,2);
    echo "\n uchburchak turi burchakli bo'ladimi -> ";
    if($c)
        echo $c;
    else 
        echo 0;
        
    // bool 33
    $a = 3;
    $b = 4;
    $c = 5;
    $c = $a < $b + $c || $b < $a + $c || $c < $b + $a;
    echo "\n uchburchak yasash mumkinmi -> ";
    if($c)
        echo $c;
    else 
        echo 0;
        
    // bool 34
    $x = 8;
    $y = 2;
    $c = ($x + $y)%2 == 1;
    echo "\n x,y maydon oqmi -> ";
    if($c)
        echo $c;
    else 
        echo 0;
        
    // bool 35
    $x1 = 8; $x2 = 8; 
    $y1 = 2; $y2 = 1; 
    $c = ($x1 + $y1)%2 == ($x2 + $y2)%2;
    echo "\n maydon bir xil rangdami -> ";
    if($c)
        echo $c;
    else 
        echo 0;
        
    // bool 36
    $x1 = 8; $x2 = 8; 
    $y1 = 2; $y2 = 1; 
    $c = ($x1 == $x2) || ($y1 == $y2);
    echo "\n ruh yura oladimi -> ";
    if($c)
        echo $c;
    else 
        echo 0;
        
    // bool 37
    $x1 = 2; $x2 = 1; 
    $y1 = 2; $y2 = 1; 
    $c = abs($x1 - $x2) == 1 || abs($y1 - $y2) == 1;
    echo "\n shoh yura oladimi -> ";
    if($c)
        echo $c;
    else 
        echo 0;
        
    // bool 38
    $x1 = 5; $x2 = 7; 
    $y1 = 2; $y2 = 4; 
    $c = abs($x1 - $x2) == abs($y1 - $y2);
    echo "\n fil yura oladimi -> ";
    if($c)
        echo $c;
    else 
        echo 0;
        
    // bool 39
    $x1 = 2; $x2 = 1; 
    $y1 = 3; $y2 = 1; 
    $c = (abs($x1 - $x2) == abs($y1 - $y2)) ||
         (($x1 == $x2) || ($y1 == $y2));
    echo "\n farzin yura oladimi -> ";
    if($c)
        echo $c;
    else 
        echo 0;
        
    // bool 40
    $x1 = 5; $x2 = 6; 
    $y1 = 2; $y2 = 4; 
    $c = (abs($x1 - $x2) == 2 && abs($y1 - $y2) == 1) ||
         (abs($y1 - $y2) == 2 && abs($x1 - $x2) == 1);
    echo "\n ot yura oladimi -> ";
    if($c)
        echo $c;
    else 
        echo 0;   
?>