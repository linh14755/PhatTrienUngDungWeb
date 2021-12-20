<html>
<head>
    <title>1. The example below shows how to use some of the elements in $_SERVER</title>
</head>
<body>
<?php
//Trả về tên file của file đang được chạy.
echo $_SERVER['PHP_SELF'];
echo "<br>";
//Trả về tên của máy chủ
echo $_SERVER['SERVER_NAME'];
echo "<br>";
//Trả về tiêu đề chủ từ yêu cầu hiện tại
echo $_SERVER['HTTP_HOST'];
echo "<br>";
//lấy User-Agent là header của yêu cầu gửi đến, qua cái này có thể biết được thông tin như
// Trình duyệt, Hệ điều hành, Thiết bị ... đang truy cập
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
//Trả về đường dẫn của kịch bản (tên file) hiện tại
echo $_SERVER['SCRIPT_NAME'];
?>
</body>
</html>