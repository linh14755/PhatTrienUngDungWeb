<?php

if (isset($_POST['makh']) && !empty($_POST['makh'])){
    require_once '../model/khachhang.php';
    $khachhang = new KhachHang('cuahangsua');

    $flag = $khachhang->Insert($_POST['makh'], $_POST['tenkh'], $_POST['gioitinh'],$_POST['diachi'], $_POST['dienthoai']);

    if ($flag){
        echo json_encode(array("statusCode"=>200));
    }else{
        echo json_encode(array("statusCode"=>201));
    }
}else{
    echo json_encode(array("statusCode"=>201));
}
