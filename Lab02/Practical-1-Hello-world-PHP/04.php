<?php
$no = 5;
$value = 13.5;
$name = "Bipin R. Prajapati";
$var = true;
$myarray = array(110, 45, " Bipin", 1.5, true);

//In ra cac kieu du lieu cua cac bien da khai bao o tren
echo gettype($no) . "<br/>";
echo gettype($value) . "<br/>";
echo gettype($name) . "<br/>";
echo gettype($var) . "<br/>";
echo gettype($myarray) . "<br/>";
echo "<hr/>";

//In kieu du lieu cua cac phan tu trong mang $data
$data = array(1, 1.5, null, "Bipin", new stdclass, true);
foreach ($data as $value) {
    echo gettype($value) . " | ";
}
