<html>
<head>
    <title>1. Write a program that demonstrate use of cookies</title>
</head>
<body>
<?php
//Tạo cookie ở client gồm name và age
setcookie("name", "Anil Basantani", time() + 3600, "/", "", 0);
setcookie("age", "21", time() + 3600, "/", "", 0);
echo "set cookies";
?>
<br/>
<!--đường dẫn đến file getcookie-->
<a href="getcookie.php">Go to getcookie</a>
</body>
</html>