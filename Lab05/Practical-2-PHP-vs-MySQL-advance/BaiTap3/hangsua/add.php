<?php

if (isset($_POST['mahs']) && !empty($_POST['mahs'])){
    require_once '../model/hangsua.php';
    $sua = new HangSua('cuahangsua');

    $flag = $sua->Insert($_POST['mahs'], $_POST['tenhs'], $_POST['diachi'], $_POST['dienthoai'], $_POST['email']);

    if ($flag){
        echo json_encode(array("statusCode"=>200));
    }else{
        echo json_encode(array("statusCode"=>201));
    }
}else{
    echo json_encode(array("statusCode"=>201));
}
