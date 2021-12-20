<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05.php</title>
</head>
<body>
<b>If the start is non-negative, the returned string will start at the start'th position
in string, start from 0.</b><br/><br/>
<?php
//Cat chuoi abcdef bat ddau tu phan tu thu 2 cua chuoi
echo "Substring with positive start:" . substr("abcdef", 2) . "<br/>";
?>
<br/>
<b>If the start is negative, the returned string will start at the start'th character in
string, from the end of the string.</b><br/><br/>
<?php
//Cat chuoi abcdef bat ddau tu phan tu thu -2 cua chuoi --> quay lai 2 buoc-->ef
echo "Substring with negative start:" . substr("abcdef", -2) . "<br/>";
?>
<br/>
<b>If the start is less than or equal to start characters long, false will
return</b><br/><br/>
<?php
////Cat chuoi abcdef bat ddau tu phan tu thu 7 cua chuoi --> chuoi chi co 6 ki tu nen tra ve rong
echo "start is <= string" . substr("abcdef", 7) . "<br/><br/>";
echo "Finish";
?>
</body>
</html>