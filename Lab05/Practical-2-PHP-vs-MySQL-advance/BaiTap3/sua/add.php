<?php

//echo '<pre>'; print_r($_FILES['file']); echo '</pre>';

if (isset($_POST['tensua']) && !empty($_POST['tensua'])) {
    require_once '../model/sua.php';

    $sua = new Sua('cuahangsua');

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

    $flag = $sua->Insert($_POST['tensua'], $_POST['hangsua'], $_POST['loaisua'], $_POST['trongluong'], $_POST['dongia'], $feature_path);


    if ($flag) {
        echo json_encode(array("statusCode" => 200));
    } else {
        echo json_encode(array("statusCode" => 201));
    }
} else {
    echo json_encode(array("statusCode" => 201));
}
