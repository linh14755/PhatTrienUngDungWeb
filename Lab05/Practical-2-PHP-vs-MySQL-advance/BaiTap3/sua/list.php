<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Simple Tables</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../adminlte/plugins/fontawesome-free/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Theme style -->
    <link rel="stylesheet" href="../adminlte/dist/css/adminlte.min.css">

    <link rel="stylesheet" href="../style.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>


        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">


            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>

        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="../admin.php" class="brand-link">
            <img src="../adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="sidebar">


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="../hangsua/list.php" class="nav-link">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                Hãng sữa
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="../khachhang/list.php" class="nav-link">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                Khách hàng
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="../sua/list.php" class="nav-link">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                Sữa
                            </p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">


                    <div class="table-wrapper mt-5 col-12">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Quản lý sữa</h2>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#addEmployeeModal" class="btn btn-success float-right" data-toggle="modal"><i
                                                class="fa fa-plus-circle"
                                                aria-hidden="true"></i><span>Thêm sữa</span></a>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên sữa</th>
                                <th>Hãng sữa</th>
                                <th>Loại sữa</th>
                                <th>Trọng lượng</th>
                                <th>Đơn giá</th>
                                <th>Ảnh</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            require_once '../model/sua.php';
                            require_once '../model/hangsua.php';

                            $sua = new Sua('cuahangsua');
                            $result = $sua->GetAll();
                            while ($row = mysqli_fetch_array($result)) {
                                $hangsua = new HangSua('cuahangsua');
                                $tenhs = $hangsua->GetByID($row['HangSua']);
                                ?>
                                <tr>
                                    <td><?php echo $row['ID']; ?></td>
                                    <td><?php echo $row['TenSua']; ?></td>
                                    <td><?php echo $tenhs['TenHS']; ?></td>
                                    <td><?php echo $row['LoaiSua']; ?></td>
                                    <td><?php echo $row['TrongLuong']; ?> gram</td>
                                    <td><?php echo number_format($row['DonGia']); ?> VND</td>
                                    <td><img class="img-thumbnail" src="<?php echo $row['image_path']; ?>" style="width: 80px;height: 80px"></td>

                                    <td>

                                        <a href="#editEmployeeModal" class="update edit" data-toggle="modal"
                                           data-id="<?php echo $row["ID"]; ?>"
                                           data-tensua="<?php echo $row["TenSua"]; ?>"
                                           data-hangsua="<?php echo $row["HangSua"]; ?>"
                                           data-loaisua="<?php echo $row["LoaiSua"]; ?>"
                                           data-trongluong="<?php echo $row["TrongLuong"]; ?>"
                                           data-dongia="<?php echo $row["DonGia"]; ?>"
                                           data-feature_path="<?php echo $row["image_path"]; ?>"
                                        >
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a class="delete" data-id="<?php echo $row["ID"]; ?>"
                                           href="#deleteEmployeeModal"
                                           data-toggle="modal">
                                            <i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>

                            </tbody>
                        </table>

                    </div>

                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.1.0-rc
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../adminlte/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../adminlte/dist/js/adminlte.min.js"></script>
<!--Admin js-->
<script src="sua.js"></script>

<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="user_form">
                <div class="modal-header">
                    <h4 class="modal-title">Thêm thông tin sữa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Tên sữa</label>
                        <input type="text" id="tensua" name="tensua" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Hãng sữa</label>
                        <select class="form-select" name="hangsua" id="hangsua">
                            <option value="" selected>Chọn hãng sữa</option>
                            <?php
                            $hangsua = new HangSua('cuahangsua');
                            $result = $hangsua->GetAll();
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <option value="<?php echo $row['MaHS'] ?>"><?php echo $row['TenHS'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Loại sữa</label>
                        <input type="text" id="loaisua" name="loaisua" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Trọng lượng</label>
                        <input type="number" step="0.01" id="trongluong" name="trongluong" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Đơn giá</label>
                        <input type="number" step="0.01" id="dongia" name="dongia" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Ảnh đại diện</label>
                        <input type="file"  id="feature_path" name="feature_path" class="form-control fileToUpLoad" accept="image/png, image/gif, image/jpeg">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" value="1" name="type">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-success" id="btn-add">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="update_form">
                <div class="modal-header">
                    <h4 class="modal-title">Chỉnh sửa sữa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id_u" name="id" class="form-control" required>
                    <div class="form-group">
                        <label>Tên sữa</label>
                        <input type="text" id="tensua_u" name="tensua" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Hãng sữa</label>
                        <select class="form-select" name="hangsua" id="hangsua_u">
                            <option value="" selected>Chọn hãng sữa</option>
                            <?php
                            $hangsua = new HangSua('cuahangsua');
                            $result = $hangsua->GetAll();
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <option value="<?php echo $row['MaHS'] ?>"><?php echo $row['TenHS'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Loại sữa</label>
                        <input type="text" id="loaisua_u" name="loaisua" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Trọng lượng</label>
                        <input type="number" step="0.01" id="trongluong_u" name="trongluong" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Đơn giá</label>
                        <input type="number" step="0.01" id="dongia_u" name="dongia" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Ảnh đại diện</label>
                        <input type="file" name="feature_path" class="form-control fileToUpLoad_u" accept="image/png, image/gif, image/jpeg">
                        <img src="" id="feature_path_u" style="width: 80px;height: 80px;">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" value="2" name="type">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-info" id="update">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>

                <div class="modal-header">
                    <h4 class="modal-title">Xóa sản phẩm</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id_d" name="mahs" class="form-control">
                    <p>Bạn có chắc muốn xóa sản phẩm này không?</p>
                    <p class="text-warning"><small>Điều này không thể hoàn nguyên.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-danger" id="delete">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
