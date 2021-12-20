<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viết chương trình nhập 2 số a và b. Tìm USCLN, BSCNN của 2 số a và b</title>
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
                <h1 style="text-transform: uppercase;" class="text-danger">Viết chương trình nhập 2 số a và b.</br> Tìm
                    USCLN, BSCNN của 2 số a và b</h1>
            </div>
            <div class="form-group">
                <label>Số A</label>
                <input type="number" class="form-control"
                       placeholder="Nhập a" name="a">
            </div>

            <div class="form-group">
                <label>Số B</label>
                <input type="number" class="form-control"
                       placeholder="Nhập b" name="b">
            </div>
            <div class="form-group mt-2">
                <?php
                function USCLN($a, $b)
                {
                    if ($b == 0) return $a;
                    return USCLN($b, $a % $b);
                }

                function BSCNN($a, $b)
                {
                    return ($a * $b) / USCLN($a, $b);
                }

                if (isset($_POST['a']) && isset($_POST['b'])) {
                    $result = '';
                    $a = isset($_POST['a']) ? (float)trim($_POST['a']) : '';
                    $b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';

                    echo ("<h4>USCLN của $a và $b là: " . USCLN($a, $b)) . "</h4>";
                    echo ("<h4>BSCNN của $a và  $b là: " . BSCNN($a, $b)) . "</h4>";
                }
                ?>
            </div>


            <button type="submit" class="btn btn-primary mt-2">Submit</button>
            <input class="btn btn-danger mt-2" type="reset" value="Cancel">
        </form>
    </div>
</div>


</body>

</html>