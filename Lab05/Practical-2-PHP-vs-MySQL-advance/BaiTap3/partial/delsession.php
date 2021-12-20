<?php
session_start();
if (session_destroy()){
    echo json_encode(array('code' => 200));
}else{
    echo json_encode(array('code' => 201));
}
