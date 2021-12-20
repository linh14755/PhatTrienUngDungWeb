<?php
//echo $_POST['id'] . '</br>';
//echo $_POST['tensua'] . '</br>';
//echo $_POST['hangsua'] . '</br>';
//echo $_POST['loaisua'] . '</br>';
//echo $_POST['trongluong'] . '</br>';
//echo $_POST['dongia'] . '</br>';


(isset($_POST['id'])) ? $id = $_POST['id'] : $id = '';
(isset($_POST['tensua'])) ? $tensua = $_POST['tensua'] : $tensua = '';
(isset($_POST['hangsua'])) ? $hangsua = $_POST['hangsua'] : $hangsua = '';
(isset($_POST['loaisua'])) ? $loaisua = $_POST['loaisua'] : $loaisua = '';
(isset($_POST['trongluong'])) ? $trongluong = $_POST['trongluong'] : $trongluong = '';
(isset($_POST['dongia'])) ? $dongia = $_POST['dongia'] : $dongia = '';


if ($id != '') {
    require_once '../model/sua.php';

    $feature_path = '';
    if (isset($_FILES['file']) && !empty($_FILES['file'])) {
        $file = $_FILES['file']['tmp_name'];
        $path = "../upload/" . $_FILES['file']['name'];
        if (!file_exists("../upload")) {
            mkdir("../upload");
        }
        if (move_uploaded_file($file, $path)) {
            $feature_path = $path;
        }
    }
    if ($feature_path != '') {
        $sua = new Sua('cuahangsua');
        $flag = $sua->Update($id, $tensua, $hangsua, $loaisua, $trongluong, $dongia, $feature_path);
    } else {
        $sua = new Sua('cuahangsua');
        $suaID = $sua->GetByID($id);
        $suaID['image_path'];
        $sua = new Sua('cuahangsua');
        $flag = $sua->Update($id, $tensua, $hangsua, $loaisua, $trongluong, $dongia, $suaID['image_path']);
    }


    echo json_encode(array("statusCode" => 200));

} else {
    echo json_encode(array("statusCode" => 201));
}
