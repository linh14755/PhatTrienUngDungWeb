<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>1. Create a php web page illustrate class, page name is fruit.php and output in this page</title>
</head>
<body>
<?php

//Tạo class
class Fruit
{
    public $name;
    public $color;

    //Phương thức khởi tạo
    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    //các hàm con
    function get_name()
    {
        return $this->name;
    }

    function get_color()
    {
        return $this->color;
    }
}

$apple = new Fruit("Apple", "red");
echo '<h1>1. Create a php web page illustrate class, page name is fruit.php and output in this page</h1>';
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
?>
</body>
</html>