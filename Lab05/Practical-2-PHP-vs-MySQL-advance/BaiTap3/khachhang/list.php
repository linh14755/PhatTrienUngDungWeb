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
                                    <h2>Quản lý khách hàng</h2>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#addEmployeeModal" class="btn btn-success float-right" data-toggle="modal"><i
                                                class="fa fa-plus-circle"
                                                aria-hidden="true"></i><span>Thêm khách hàng</span></a>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Mã KH</th>
                                <th>Tên khách hàng</th>
                                <th>Giới tính</th>
                                <th>Địa chỉ</th>
                                <th>Số ĐT</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            require_once '../model/khachhang.php';
                            $khachhang = new KhachHang('cuahangsua');
                            $result = $khachhang->GetAll();
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['MaKH']; ?></td>
                                    <td><?php echo $row['TenKH']; ?></td>
                                    <td><?php echo ($row['GioiTinh'] == 0) ? 'Nam' : 'Nữ' ?></td>

                                    <td><?php echo $row['DiaChi']; ?></td>
                                    <td><?php echo $row['SoDT']; ?></td>

                                    <td>

                                        <a href="#editEmployeeModal" class="update edit" data-toggle="modal"
                                           data-makh="<?php echo $row["MaKH"]; ?>"
                                           data-tenkh="<?php echo $row["TenKH"]; ?>"
                                           data-gioitinh="<?php echo $row["GioiTinh"]; ?>"
                                           data-diachi="<?php echo $row["DiaChi"]; ?>"
                                           data-dienthoai="<?php echo $row["SoDT"]; ?>"
                                        >
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a class="delete" data-makh="<?php echo $row["MaKH"]; ?>"
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
<script src="khachhang.js"></script>

<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="user_form">
                <div class="modal-header">
                    <h4 class="modal-title">Thêm thông tin khách hàng</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Mã KH</label>
                        <input type="text" id="makh" name="makh" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input type="text" id="tenkh" name="tenkh" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label>
                        <select class="form-select" name="gioitinh">
                            <option value="" selected>Chọn giới tính</option>
                            <option value="0">Nam</option>
                            <option value="1">Nữ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="email" id="diachi" name="diachi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Điện thoại</label>
                        <input type="tel" id="dienthoai" name="dienthoai" class="form-control" required
                        <input type="tel" id="dienthoai" name="dienthoai" class="form-control" required
                               pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
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
                    <h4 class="modal-title">Chỉnh sửa khách hàng</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="makh_u" name="makh" class="form-control" required>
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input type="text" id="tenkh_u" name="tenkh" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label>
                        <select class="form-select" id="gioitinh_u" name="gioitinh" >
                            <option value="" selected>Chọn giới tính</option>
                            <option value="0">Nam</option>
                            <option value="1">Nữ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" id="diachi_u" name="diachi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Điện thoại</label>
                        <input type="tel" id="dienthoai_u" name="dienthoai" class="form-control" required>
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
                    <h4 class="modal-title">Xóa khách hàng</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="makh_d" name="makh" class="form-control">
                    <p>Bạn có chắc muốn xóa khách hàng này không?</p>
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
