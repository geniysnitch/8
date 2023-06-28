<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $e = $_POST['e'];
    $f = $_POST['f'];
    echo "а) Перший рядок: " . $e . "<br>";
    echo "   Другий рядок: " . $f . "<br><br>";
    
    echo "б) Другий рядок: " . $f . "<br>";
    echo "   Перший рядок: " . $e . "<br>";
}
?>