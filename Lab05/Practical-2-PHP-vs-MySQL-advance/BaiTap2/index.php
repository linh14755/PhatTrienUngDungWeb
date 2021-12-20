<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Sinh Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    html,
    body {
        height: 100%
    }
</style>
<?php
include 'class.php';
include 'student.php';
?>

<body>
<div class="row align-items-center m-2">
    <div class="justify-content-center ">

        <div class="row mt-5">
            <div class="col-12">
                <h1>Quản lý sinh viên</h1>
                <a href="addstudent.php" type="button" class="btn btn-success">Add</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">MSSV</th>
                        <th scope="col">Họ Tên</th>
                        <th scope="col">Tuổi</th>
                        <th scope="col">Lớp</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sv = new SinhVien("qlsinhvien_ptudweb");


                    $result = $sv->GetAll();
                    while ($row = mysqli_fetch_array($result)) {
                        $lop = new  Lop("qlsinhvien_ptudweb");
                        $rlop = $lop->GetByID($row['MaLop']);
                        echo "<tr>";
                        echo "<td>" . $row['MSSV'] . "</td>";
                        echo "<td>" . $row['HoTen'] . "</td>";
                        echo "<td>" . $row['Tuoi'] . "</td>";
                        echo "<td>" . $rlop['TenLop'] . "</td>";
                        echo "<td><a class='btn btn-default' href='editstudent.php?mssv=" . $row['MSSV'] . "'>Edit

</a>
<a class='btn btn-outline-danger' href='delstudent.php?mssv=" . $row['MSSV'] . "'>
Delete
</a>
</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>

</html>