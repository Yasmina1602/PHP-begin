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
    
        // if 11
    $a = 11;
    $b = 16;
    $a != $b ? $a = $b = max($a, $b) : $a = $b = 0;
    echo "\nif 11 -> a = ".$a.", b = ".$b;
        
        // if 12
    $a = 21;
    $b = 16;  
    $c = 60;  
    echo "\nif 12 -> min = ".min($a, $b, $c);
    
        // if 13
    $a = [21, 1, 10];
    sort($a);
    echo "\nif 13 -> medium = ".$a[1];
    
        // if 14
    $a = 21;
    $b = 16;  
    $c = 60;  
    echo "\nif 14 -> min = ".min($a, $b, $c).", max = ".max($a, $b, $c);
    
        // if 15
    $a = [111, 22, 30];
    sort($a);
    echo "\nif 15 -> max1 + max2 = ".$a[2] + $a[1];
    
        // if 16
    $a = 1;
    $b = 16;  
    $c = 60;
    if ($a < $b && $b < $c) { 
        $a *= 2;
        $b *= 2;
        $c *= 2;
    } else {
        $a *= -1;
        $b *= -1;
        $c *= -1;
    }
    echo "\nif 16 -> a = ".$a.", b = ".$b.", c = ".$c;
    
        // if 17
    $a = 21;
    $b = 16;  
    $c = 60;
    if (($a < $b && $b < $c)||($a > $b && $b > $c)) { 
        $a *= 2;
        $b *= 2;
        $c *= 2;
    } else {
        $a *= -1;
        $b *= -1;
        $c *= -1;
    }
    echo "\nif 17 -> a = ".$a.", b = ".$b.", c = ".$c;
    
        // if 18
    $a = 21;
    $b = 16;  
    $c = 16;
    echo "\nif 18 -> result = ";
    if($a == $b) echo $c;
    if($a == $c) echo $b;
    if($c == $b) echo $a;

        // if 19
    $a = [12, 66, 12, 12];
    sort($a);
    echo "\nif 19 -> result = ";
    echo $a[0] == $a[1] ? $a[3] : $a[0];
        
        // if 20
    $a = [12, 0];
    $b = [20, 11];
    $c = [0, 0];
    $b = sqrt(pow(($a[0] - $b[0]),2) + pow(($a[1] - $b[1]),2));
    $c = sqrt(pow(($a[0] - $c[0]),2) + pow(($a[1] - $c[1]),2));
    echo "\nif 20 -> ";
    echo $b < $c ? "b = ".$b : "c = ".$c;
?>
