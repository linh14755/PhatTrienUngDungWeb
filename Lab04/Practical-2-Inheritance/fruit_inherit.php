<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>1. Inheritance in one page named fruit_inherit.php</title>
</head>
<body>
<?php

class Fruit
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

//class Strawberry kế thừa từ Fruit
class Strawberry extends Fruit
{
    public function message()
    {
        echo "Am I a fruit or a berry? ";
    }
}

$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>
</body>
</html>