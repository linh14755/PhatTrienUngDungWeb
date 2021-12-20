<?php

if (isset($_POST['makh']) && !empty($_POST['makh'])){
    require_once '../model/khachhang.php';
    $khachhang = new KhachHang('cuahangsua');

    echo $flag = $khachhang->Delete($_POST['makh']);

    if ($flag){
        echo json_encode(array("statusCode"=>200));
    }else{
        echo json_encode(array("statusCode"=>201));
    }
}else{
    echo json_encode(array("statusCode"=>201));
}
