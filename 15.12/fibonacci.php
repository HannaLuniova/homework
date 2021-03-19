<?php
$a = $_POST["number"];

echo "вычисляем с использованием цикла for <br>";
echo ($x = 0) . '<br>' . ($y = 1) . '<br>';

for ($i = 0; $i < $a; $i++) {
    $z = $x + $y;
    echo $z . "<br />";
    $x = $y;
    $y = $z;
}


echo "вычисляем с использованием цикла do/while <br>";

echo ($x = 0) . '<br>' . ($y = 1) . '<br>';

$i = 0;

do {
    $z = $x + $y;
    echo $z . "<br />";
    $x = $y;
    $y = $z;
    $i++;
} while ($i < $a);



echo "вычисляем с использованием цикла while <br>";

$i = 0;
echo ($x = 0) . '<br>' . ($y = 1) . '<br>';

while ($i < $a) {
    $z = $x + $y;
    $x = $y;
    $y = $z;
    echo $z . "<br />";
    $i++;
}
