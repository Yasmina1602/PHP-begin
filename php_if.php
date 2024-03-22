<?php
    // if 1
    $a = 87;
    if ($a > 0) $a++;
    echo "\n if 1 -> result = ".$a;
    
    // if 2
    $a = -87;
    echo "\n if 2 -> result = ".($a > 0 ? ++$a : $a-2);

    // if 3
    $a = -16;
    if($a == 0){
        $a = 10;
    }else{
        $a = $a < 0 ? $a - 2 : $a + 1;
    }
    echo "\n if 3 -> result = ".$a;
    
    // if 4
    $a = 3;
    $b = 4;
    $c = -6;
    $a = $a >= 0;
    $b = $b >= 0;
    $c = $c >= 0;
    echo "\n if 4 -> musbat sonlar = ".$a + $b + $c;
    
    // if 5
    $a = 3;
    $b = 4;
    $c = -6;
    $a = $a >= 0;
    $b = $b >= 0;
    $c = $c >= 0;
    echo "\n if 5 -> musbat sonlar = ".$a + $b + $c.", manfiy sonlar = ". 3 - ($a + $b + $c);
    
    // if 6
    $a = 202;
    $b = 18;
    echo "\n if 6 -> kattasi = ".($a < $b ? $b : $a);
    
    // if 7
    $a = 2;
    $b = 18;
    echo "\n if 7 -> kattasi = ".($a < $b ? $b.", ikkinchi son" : $a.", birinchi son"); 
 
    // if 8
    $a = 202;
    $b = 18;
    echo "\n if 8 -> result = ".($a < $b ? $b.", ".$a : $a.", ".$b); 
    
    // if 9
    $a = 202;
    $b = 18;
    if($a > $b){
        $c = $a;
        $a = $b;
        $b = $c;
    }
    echo "\n if 9 -> result = ".$a.", ".$b;

    // if 10
    $a = 55;
    $b = 55;
    $a == $b ? $a = $b = $a + $b : $a = $b = 0;
    echo "\n if 10-> result = ".$a.", ".$b;
?>