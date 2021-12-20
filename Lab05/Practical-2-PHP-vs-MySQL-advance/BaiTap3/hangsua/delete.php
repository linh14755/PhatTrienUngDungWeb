<?php

if (isset($_POST['mahs']) && !empty($_POST['mahs'])){
    require_once '../model/hangsua.php';
    $sua = new HangSua('cuahangsua');

    $flag = $sua->Delete($_POST['mahs']);

    if ($flag){
        echo json_encode(array("statusCode"=>200));
    }else{
        echo json_encode(array("statusCode"=>201));
    }
}else{
    echo json_encode(array("statusCode"=>201));
}
