<html>
<head>
    <title>Session</title>
</head>
<body>
<?php
//In ra các biến name password trong session
session_start();
echo "Welcome " . $_SESSION["name"] . "<br/>";
echo "your Password:" . $_SESSION["Password"];
?>
</body>
</html>