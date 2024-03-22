<?php
    // 1. A va B sonlari berilgan shu sonlarni qo’shish dasturini yozing
    function add($a, $b) {
        return $a + $b;
    }
    $a = 23.45;
    $b = 67.89;
    echo "1 - example -> ".add($a, $b);
    
    // 2. 4-savolda berilgan massivni chop qiling.(Sikl yordamida yoki massivni shunchaki ko’rish uchun) 
    $fruits = array(
    "pear" => 10,
    "apple" => 15,
    "banana" => 20,
    "orange" => 12,
    "grape" => 8,
    "pineapple" => 5,
    "strawberry" => 25,
    "kiwi" => 18,
    "watermelon" => 30,
    "mango" => 22
    ); 
    echo "\n\n2 and 4 - example -> ";
    foreach ($fruits as $fruit => $amount) {
        echo "\n\tfruit: $fruit = $amount.";
    }
    
    // 3. PHPda 4x4 matritsa hosil qiling
    $matrix = array(
    array(1, 2, 3, 4),
    array(5, 6, 7, 8),
    array(8, 7, 6, 5),
    array(4, 3, 2, 1)
    );
    echo "\n\n3 - example -> \n";
    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 4; $j++) {
            echo "\t".$matrix[$i][$j]." ";
    }
        echo "\n";
    }
    // 4. PHPda mevalar nomli 10ta elementli meva nomi va miqdori bo’yicha bog’langan massiv hosil qiling. 
    $fruits = array(
    "pear" => 10,
    "apple" => 15,
    "banana" => 20,
    "orange" => 12,
    "grape" => 8,
    "pineapple" => 5,
    "strawberry" => 25,
    "kiwi" => 18,
    "watermelon" => 30,
    "mango" => 22
    ); 
    
    // 5. Ikkita son berilgan shu sonlarning o’rta kvadratini toping. 
    function meanSquare($x, $y) {
        $square = ($x**2 + $y**2) / 2;
        return $square;
    }
    $a = 5;
    $b = 7;
    $square = meanSquare($a, $b);
    echo "\n5 - example -> ".$square;
    
    // 6. Ikkita s1, s2 satr berilgan ushbu satrlarni qo’shing va undagi so’zlar soni, belgilar soni bo’yicha ma’lumonti chiqaring. 
    $s1 = "hello";
    $s2 = "world";
    $s3 = $s1 . " " . $s2;
    $count = 0; 
    $word = 1;
    for ($i = 0; $i < strlen($s3); $i++) {
        if ($s3[$i] != ' ') {
            $count++;
        }else{
            $word++;
        }
    }
    echo "\n\n6 - example -> \n\t$s3 \n\tcharacters = $count \n\twords = $word";
    
    // 7. 2-savolda yaratgan massivni miqdor bo’yicha saralang.
    $fruits = array(
    "pear" => 10,
    "apple" => 15,
    "banana" => 20,
    "orange" => 12,
    "grape" => 8,
    "pineapple" => 5,
    "strawberry" => 25,
    "kiwi" => 18,
    "watermelon" => 30,
    "mango" => 22
    ); 
    echo "\n\n7 - example -> ";
    asort($fruits);
    print_r($fruits);
    
    // 8. Markaziy bank belgilagan valyuta kursini ekranga chiqaring. 
    $exchangeRates = array(
    "USD" => 1.20,
    "EUR" => 0.85,
    "UZ" => 10500,  
    "RU" => 75 
    );
    echo "\n8 - example -> \n";
    foreach ($exchangeRates as $currency => $rate) {
        echo "\t$currency: $rate\n";
    }
?>