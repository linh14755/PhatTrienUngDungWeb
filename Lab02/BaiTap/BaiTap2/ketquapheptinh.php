<?php
$so1 = $_REQUEST['so1'];
$so2 = $_REQUEST['so2'];
$pheptinh = $_REQUEST['pheptinh'];

switch ($pheptinh) {
    case 'cong':
        $ketqua = $so1 + $so2;
        $pheptinh = 'Cộng';
        break;
    case 'tru':
        $ketqua = $so1 - $so2;
        $pheptinh = 'Trừ';
        break;
    case 'nhan':
        $ketqua = $so1 * $so2;
        $pheptinh = 'Nhân';
        break;
    case 'chia':
        $ketqua = $so1 / $so2;
        $pheptinh = 'Chia';
        break;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pheptinh.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</head>
<style>
html,
body {
    height: 100%
}
</style>

<body>
    <div></div>
    <div class="h-100 row align-items-center">
        <div class="d-flex justify-content-center">

            <form>
                <div class="form-group">
                    <h1 style="text-transform: uppercase;" class="text-danger">Phép tính trên hai số</h1>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="text-primary">Số thứ nhất</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Số thứ nhất" name="so1" value="<?php echo $so1; ?>" readonly>

                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1" class="text-primary">Só thứ 2</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Số thứ hai"
                        name="so2" value="<?php echo $so2; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword2" class="text-primary">Kết quả</label>
                    <input type="number" class="form-control" id="exampleInputPassword2" placeholder="Kết quả"
                        name="ketqua" value="<?php echo $ketqua; ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="text-primary">Phép tính đã chọn: <?php echo $pheptinh; ?></label>
                </div>
                <div class="form-group">
                    <a class="text-warning" href="pheptinh.php">Quay lại trang trước</a>
                </div>

            </form>
        </div>
    </div>


</body>

</html>