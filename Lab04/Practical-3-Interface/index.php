<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>1. Write a program that demonstrate interface in PHP</title>
</head>
<body>
<?php
include 'interface.php';
// Khởi tạo các class
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);
// In mảng
foreach ($animals as $animal) {
    $animal->makeSound();
}
?>
</body>
</html>