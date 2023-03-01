<?php

$a = 10;
$b = 20;
$c = 'Prva rijec';
$d = ' druga rijec';

echo 'a+b= ', $a + $b, "\n";
echo 'a-b= ', $a - $b, "\n";
echo 'a*b= ', $a * $b, "\n";
echo 'a/b= ', $a / $b, "\n";
echo 'a%b= ', $a % $b, "\n";

$f = $c . '-' . $d;
echo "Konkatenacija: ", $f, "\n\n";

echo $a += $b, "\n";

var_dump($a > $b);

echo $a++, "\n";
echo $b--, "\n";