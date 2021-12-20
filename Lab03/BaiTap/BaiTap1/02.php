<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viết chương trình giải phương trình bậc II: ax2 + bx + c = 0</title>
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
                <h1 style="text-transform: uppercase;" class="text-danger">Viết chương trình giải phương trình bậc II:
                    ax2 + bx + c = 0</h1>
            </div>
            <div class="form-group">
                <label>Số A</label>
                <input type="number" class="form-control" step="0.01"
                       placeholder="Nhập a" name="a">
            </div>

            <div class="form-group">
                <label>Số B</label>
                <input type="number" class="form-control" step="0.01"
                       placeholder="Nhập b" name="b">
            </div>
            <div class="form-group">
                <label>Số c</label>
                <input type="number" class="form-control" step="0.01"
                       placeholder="Nhập c" name="c">
            </div>
            <div class="form-group">
                <?php
                $result = '';
                $a = isset($_POST['a']) ? (float)trim($_POST['a']) : '';
                $b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';
                $c = isset($_POST['c']) ? (float)trim($_POST['c']) : '';

                if ($a == '') {
                    $result = 'Bạn chua nhập số a';
                } else if ($b == '') {
                    $result = 'Bạn chưa nhập số b';
                } else if ($a == 0) {
                    $result = 'Số a phải nhập khác 0';
                } else {
                    // kiểm tra các hệ số
                    if ($a == 0) {
                        if ($b == 0) {
                            $result = "Phương trình vô nghiệm!";
                        } else {
                            $result = "Phương trình có một nghiệm: " . "x = " . (-$c / $b);
                        }
                        return;
                    }
                    // tính delta
                    $delta = $b * $b - 4 * $a * $c;
                    $x1 = "";
                    $x2 = "";
                    // tính nghiệm
                    if ($delta > 0) {
                        $x1 = (-$b + sqrt($delta)) / (2 * $a);
                        $x2 = (-$b - sqrt($delta)) / (2 * $a);
                        $result = "Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2;
                    } else if ($delta == 0) {
                        $x1 = (-$b / (2 * $a));
                        $result = "Phương trình có nghiệm kép: x1 = x2 = " . $x1;
                    } else {
                        $result = "Phương trình vô nghiệm!";
                    }
                }
                echo "<h4>Phương trình: " . $a . "x2 + " . $b . "x + " . $c . " = 0</h4>";
                echo '<h4>Kết quả: ' . $result . '</h4>';
                ?>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
            <input class="btn btn-danger mt-2" type="reset" value="Cancel">
        </form>
    </div>
</div>


</body>

</html>