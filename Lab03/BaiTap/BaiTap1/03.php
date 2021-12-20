<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viết chương trình kiểm tra tính hợp lệ của tam giác.</title>
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

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <!--Trả về tên file của file đang được chạy.-->
            <div class="form-group">
                <h1 style="text-transform: uppercase;" class="text-danger">Viết chương trình kiểm tra tính hợp lệ của
                    tam giác.</h1>
            </div>

            <div class="form-group">
                <label>Cạnh 1</label>
                <input type="number" class="form-control" step="0.01"
                       placeholder="Nhập độ dài cạnh thứ nhất" name="c1">
            </div>

            <div class="form-group">
                <label>Cạnh 2</label>
                <input type="number" class="form-control" step="0.01"
                       placeholder="Nhập độ dài cạnh thứ hai" name="c2">
            </div>

            <div class="form-group">
                <label>Cạnh 3</label>
                <input type="number" class="form-control" step="0.01"
                       placeholder="Nhập độ dài cạnh thứ ba" name="c3">
            </div>
            <div class="form-group">
                <?php
                $result = '';
                $a = isset($_POST['c1']) ? (float)trim($_POST['c1']) : '';
                $b = isset($_POST['c2']) ? (float)trim($_POST['c2']) : '';
                $c = isset($_POST['c3']) ? (float)trim($_POST['c3']) : '';

                // Kiểm tra nhập thiếu dữ liệu.
                if (!empty($a) || !empty($b) || !empty($c)) {
                    if (($a + $b) > $c && ($b + $c) > $a && ($c + $a) > $b) {

                        $a2 = $a * $a;
                        $b2 = $b * $b;
                        $c2 = $c * $c;

                        if ($a == $b && $b == $c) {
                            $result = 'Tam giác đều';
                        } else if ($a == $b || $a == $c || $c == $b) {
                            if ($a2 == $b2 + $c2 || $b2 == $a2 + $c2 || $c2 == $a2 + $b2) {
                                $result = 'Tam giác vuông cân';
                            } else {
                                $result = 'Tâm giác cân';
                            }
                        } else if ($a2 == $b2 + $c2 || $b2 == $a2 + $c2 || $c2 == $a2 + $b2) {
                            $result = 'Tam giác vuông';
                        } else {
                            $result = 'Tam giác thường';
                        }
                    } else {
                        $result = 'Không tạo thành được tam giác';
                    }
                } else {
                    $result = 'Nhập thiếu dữ liệu !!!';
                }

                echo '<h4>Ba cạnh ' . $a . ', ' . $b . ', ' . $c . ' tạo thành ' . $result . '</h4>'
                ?>
            </div>


            <button type="submit" class="btn btn-primary mt-2">Submit</button>
            <input class="btn btn-danger mt-2" type="reset" value="Cancel">
        </form>
    </div>
</div>

</body>

</html>