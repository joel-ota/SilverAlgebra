<?php

// Ispis prvih deset brojeva
$a = 1;
while($a <= 10){
    echo $a, ' ';
    $a++;
}

echo "\n";
// Ispis parnih brojeva do 100
for($i = 1; $i < 100; $i++){
    if(($i % 2) === 0){
        echo $i, ' ';
    }
}