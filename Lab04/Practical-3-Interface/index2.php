<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>2. In the following example, we will show you how to use the interface to make the system more
        flexible and easier to extend</title>
</head>
<body>
<?php
include 'loger.php';
// examle 1 chỉ ghi text vào log bằng class FileLogger
//$logger = new FileLogger('./log.txt', 'w');
//$logger->log('PHP interfae is awesome');
// example 2 ghi text vào log bằng class FileLogger và echo thực hiện ghi log thành công
$loggers = [
    new FileLogger('./log.txt'),
    new DatabaseLogger()
];
foreach ($loggers as $logger) {
    $logger->log('Log message 3');
}
?>
</body>
</html>