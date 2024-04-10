<?php
        // function 1
    function PowerA3($number) {
        echo "\n \t".$number." power = ".$number ** 3;
    }
    $A = 2.5;
    $B = -3.7;
    $C = 1.8;
    $D = 4;
    $E = -2;
    echo "function 1 -> ";
    PowerA3($A);
    PowerA3($B);
    PowerA3($C);
    PowerA3($D);
    PowerA3($E);

        // function 2
    function PowerA234($number) {
    echo "\t2nd power = " . ($number ** 2) . "\n";
    echo "\t3rd power = " . ($number ** 3) . "\n";
    echo "\t4th power = " . ($number ** 4) . "\n\n";
    }
    $A = 2.5;
    $B = -3.7;
    $C = 1.8;
    echo "\nfunction 2 -> \n";
    PowerA234($A);
    PowerA234($B);
    PowerA234($C);
    
        // function 3
    function MEAN($num1, $num2) {
        $arithmetic = ($num1 + $num2) / 2;
        echo "\tArithmetic : $arithmetic\n";
        $geometric = sqrt($num1 * $num2);
        echo "\tGeometric : $geometric\n\n";
    }
    echo "function 3 -> \n";
    $A = 5;
    $B = 7;
    $C = 8;
    $D = 4;
    MEAN($A, $B);
    MEAN($A, $C);
    MEAN($A, $D);
        
        // function 4
    function Triangle($length) {
        $area = (sqrt(3) / 4) * pow($length, 2);
        echo "\tArea: $area\n";
        $perimeter = 3 * $length;
        echo "\tPerimeter: $perimeter\n\n";
    }
    $side1 = 5;
    $side2 = 7;
    $side3 = 8;
    echo "function 4 -> \n";
    Triangle($side1);
    Triangle($side2);
    Triangle($side3);
    
        // function 5
    function RectPS($x1, $y1, $x2, $y2) {
        $length = abs($x2 - $x1);
        $width = abs($y2 - $y1);
        $area = $length * $width;
        echo "\tArea: $area\n";
        $perimeter = 2 * ($length + $width);
        echo "\tPerimeter: $perimeter\n\n";
    }
    $x1_1 = 1;
    $y1_1 = 2;
    $x2_1 = 5;
    $y2_1 = 6;
    echo "function 5 -> \n";
    RectPS($x1_1, $y1_1, $x2_1, $y2_1);
    $x1_1 = 3;
    $y1_1 = 4;
    $x2_1 = 8;
    $y2_1 = 10;
    RectPS($x1_1, $y1_1, $x2_1, $y2_1);
    
        // function 6
    function DigitCountSum($number) {
        $count = strlen((string)$number);
        $sum = array_sum(str_split((string)$number));
        
        echo "\tCount of digits for $number: $count\n";
        echo "\tSum of digits for $number: $sum\n\n";
    }
    echo "function 6 -> \n";
    $a = 123;
    $b = 4567;
    $c = 89123;
    DigitCountSum($a);
    DigitCountSum($b);
    DigitCountSum($c);
    
        // function 7
    function InvertDigit($number) {
        $reversed_number = (int)strrev((string)$number);
        echo "\tReversed number of $number: $reversed_number\n";
    }
    $a = 123;
    $b = 4567;
    $c = 89123;
    echo "function 7 -> \n";
    InvertDigit($a);
    InvertDigit($b);
    InvertDigit($c);

        // function 8
    function AddRightDigit($K, $R) {
        if ($R < 1 || $R > 9) {
            echo "Error: range [1, 9].\n";
            return;
        }
        $result = (int)($K . $R);
        echo "\tResult: $result\n\n";
    }
    $K = 123;
    $R = 4;
    echo "\nfunction 8 -> \n";
    AddRightDigit($K, $R);
    
        // function 9
    function AddLeftDigit($K, $R) {
        if ($R < 1 || $R > 9) {
            echo "Error: range [1, 9].\n";
            return;
        }
        $result = (int)($R . $K);
        echo "\tResult: $result\n\n";
    }
    $K = 123;
    $R = 4;
    echo "function 9 -> \n";
    AddLeftDigit($K, $R);
    
        // function 10
    function Swap(&$num1, &$num2) {
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;
    }
    $A = 10;
    $B = 20;
    $C = 30;
    $D = 40;
    echo "function 10 -> \n";
    Swap($A, $B);
    Swap($D, $C);
    echo "\tA = $A, B = $B\n";
    echo "\tC = $C, D = $D\n";
    
        // function 11
    function Minmax(&$X, &$Y) {
        if ($X > $Y) {
            // Swap X and Y if X is greater than Y
            $temp = $X;
            $X = $Y;
            $Y = $temp;
            echo "\tmin = $X, max = $Y\n";
        }
    }
    $a = 15;
    $b = 8;
    $c = 23;
    $d = 11;
    echo "\nfunction 11 -> \n";
    Minmax($a, $b);
    Minmax($c, $d);
    
        // function 12
        
        // function 13
        
        // function 14
        
        // function 15
        
        // function 16
        
        // function 17
        
        // function 18
        
        // function 19
        
        // function 20

?>




