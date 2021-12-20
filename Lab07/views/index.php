<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>Nhân viên</title>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f6f9;
        }
    </style>
</head>
<body>
<div class="container">


    <h2>Employee List</h2>
    <p><a href="index.php?action=eadd" class="btn btn-success">Thêm</a></p>
    <table class="table table-hover text-nowrap">
        <thead>
        <tr>
            <th>Id</th>
            <th>Firstname</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Phòng</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($data["ListEmp"] as $List) {
            ?>
            <tr>
                <td><?php echo $List[0] ?></td>
                <td><?php echo $List[1] ?></td>
                <td><?php echo $List["Surname"] ?></td>
                <td><?php echo $List["email"] ?></td>
                <td><?php echo $List["phone"] ?></td>
                <td><?php echo $List[7] ?></td>
                <td>
                    <a class="btn btn-primary" href="index.php?action=detail&id=<?php echo $List[0] ?>">Detail</a> 
                    <a class="btn btn-warning" href="index.php?action=eedit&id=<?php echo $List[0] ?>">Edit</a> 
                    <a class="btn btn-danger" href="index.php?action=edelete&id=<?php echo $List[0] ?>">Delete</a>
                </td>
            </tr>
            <?php

        }
        ?>
        </tbody>
    </table>


</div>
</body>
</html>