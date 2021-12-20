<?php
require_once 'student.php';
$mssv = $_GET['mssv'];
$sinhvien = new SinhVien('qlsinhvien_ptudweb');
$sinhvien->Delete($mssv);
header('location:index.php');
?>