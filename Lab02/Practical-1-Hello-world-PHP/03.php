<?php
$a = 10;
$b = 20;
//In ra 2 so
echo "a = $a" . "<br>" . "b = $b" . "<br>";
//Hoan doi
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
//In ra 2 so da hoan doi
echo "<b>After Swapping" . "<br>" . " a = $a" . "<br>" . "b = $b<b>";
