<?php

$a = $_GET['a'];
$b = $_GET['b'];

if (is_numeric($a) && is_numeric($b) && floor($a) == $a && floor($b) == $b) {
    $sum = $a + $b;
    $product = $a * $b;
    $difference = $a - $b;
    if ($b != 0) {
        $quotient = $a / $b;
    } else {
        $quotient = "Ділення на нуль неможливе";
    }
    echo "Сума: " . $sum . "<br>";
    echo "Добуток: " . $product . "<br>";
    echo "Різниця: " . $difference . "<br>";
    echo "Частка: " . $quotient . "<br>";
} else {
    echo "Введені значення не є цілими числами.";
}
?>
