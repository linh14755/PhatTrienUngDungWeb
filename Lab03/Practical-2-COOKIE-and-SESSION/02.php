<html>
<head>
    <title>2. Write a program that demonstrate use of session</title>
</head>
<body>
<?php
//Trước khi gán session phải dùng lệnh session_start mới có thể sử dụng session
session_start();
$_SESSION["name"] = "Anil";
$_SESSION["Password"] = "nil";
echo "set session";
?>
<br/>
<a href="getsession.php">Go to getsession</a>
</body>
</html>