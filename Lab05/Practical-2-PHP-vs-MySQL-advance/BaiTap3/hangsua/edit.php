<?php

if (isset($_POST['mahs']) && !empty($_POST['mahs'])) {
    require_once '../model/hangsua.php';
    $sua = new HangSua('cuahangsua');

    $flag = $sua->Update($_POST['mahs'], $_POST['tenhs'], $_POST['diachi'], $_POST['dienthoai'], $_POST['email']);


    echo json_encode(array("statusCode" => 200));


} else {
    echo json_encode(array("statusCode" => 201));
}
