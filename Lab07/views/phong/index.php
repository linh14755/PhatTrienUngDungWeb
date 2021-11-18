<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>Phòng</title>
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


        <h2>Department List</h2>
        <p><a href="index.php?action=phongadd" class="btn btn-success">Thêm</a></p>
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>
                <th>Id</th>
                <th>Tên phòng</th>
                <th>Số lượng nv</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($data["ListP"] as $List) {
                ?>
                <tr>
                    <td><?php echo $List["id"] ?></td>
                    <td><?php echo $List["Name"] ?></td>
                    <td><?php echo $List["NumberOfStaff"] ?></td>

                    <td>
                        <a href="index.php?action=phongchitiet&id=<?php echo $List["id"] ?>">Detail</a> |
                        <a href="index.php?action=phongedit&id=<?php echo $List["id"] ?>">Edit</a> |
                        <a href="index.php?action=phongdelete&id=<?php echo $List["id"] ?>">Delete</a>
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