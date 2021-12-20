<?php


if (isset($_POST['id']) && !empty($_POST['id'])){
    require_once '../model/sua.php';
    $sua = new Sua('cuahangsua');

    $flag = $sua->Delete($_POST['id']);

    if ($flag){
        echo json_encode(array("statusCode"=>200));
    }else{
        echo json_encode(array("statusCode"=>201));
    }
}else{
    echo json_encode(array("statusCode"=>201));
}
