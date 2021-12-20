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

            <form action="ketqua.php">
                <div class="form-group">
                    <h1 style="text-transform: uppercase;" class="text-danger">Kết quả thi đại học</h1>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Toán</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Điểm toán" name="toan">

                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Lý</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Điểm lý"
                        name="ly">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Hóa</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Điểm hóa"
                        name="hoa">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Điểm chuẩn</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Điểm chuẩn"
                        name="diemchuan">
                </div>



                <button type="submit" class="btn btn-primary">Xem kết quả</button>
                <input class="btn btn-danger" type="reset" value="Cancel">
            </form>
        </div>
    </div>


</body>

</html>