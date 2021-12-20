<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Upload file</title>
</head>
<body>
<?php
//Hằng định nghĩa kích thước lớn nhất được upload lên
$MAX_FILE_SIZE = 1000000;
// Kiểm tra có phải là phương thức post
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    echo 'Upload not sucessfull (not POST)';
    exit(-1);
}
// Kiểm tra quá trình upload
if (!isset($_FILES["file_upload"]["error"]) || $_FILES["file_upload"]["error"] != 0) {
    echo 'Upload not sucessfull (error upload processing)';
    exit(-1);
}
// Kiểm tra kích thước file có vượt quá max_file_size hay không
if ($_FILES["file_upload"]["size"] > $MAX_FILE_SIZE) {
    echo "Upload not sucessfull (file size too large" . $_FILES['file_upload']['size'] . ")";
    exit(-1);
}
// Tách tên file và phần mở rộng ra riêng với đường dẫn thư mục được upload
//hàm cắt chuỗi theo pattern
$temp = preg_split('/[\/\\\\]+/', $_FILES["file_upload"]["name"]);
$filename = $temp[count($temp) - 1];
//Kiểm tra phần mở rộng có phải dạng image không
if (!preg_match('/\.(jpg|bmp|gif|png)$/i', $filename)) {
    echo 'Upload not sucessfull <br>';
    echo 'Please, upload image file <br>';
    exit(-1);
}
// tạo folder upload trên server
$upload_dir = "upload";
if (!file_exists($upload_dir))
    mkdir("upload");
//tạo đường dẫn file trên server vd: upload/anh.png
$upload_file = $upload_dir . "/" . $filename;
//Tiến hành move upload file với 2 tham số là tmp_name và đường dẫn file trên server,
// nếu success sẽ echo ra các thông tin file được upload
if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $upload_file)) {
    echo "Uploaded: " . $_FILES["file_upload"]["name"] . "<br />";
    echo "Type: " . $_FILES["file_upload"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file_upload"]["size"] / 1024) . " Kb<br />";
    echo '<img src="' . $upload_file . '" style="width:350px;">';
} else {
    echo 'Upload not sucessfull (error on server)';
}
//?>
</body>
</html>