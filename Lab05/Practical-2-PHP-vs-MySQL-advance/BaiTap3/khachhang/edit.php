<?php

if (isset($_POST['makh']) && !empty($_POST['makh'])) {
    require_once '../model/khachhang.php';
    $khachhang = new KhachHang('cuahangsua');

    $khachhang->Update($_POST['makh'], $_POST['tenkh'], $_POST['gioitinh'], $_POST['diachi'], $_POST['dienthoai']);


    echo json_encode(array("statusCode" => 200));


} else {
    echo json_encode(array("statusCode" => 201));
}
