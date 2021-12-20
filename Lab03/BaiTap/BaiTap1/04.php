<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viết chương trình nhập n. Xuất bảng cửu chương thứ n</title>
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
                <h1 style="text-transform: uppercase;" class="text-danger">Viết chương trình nhập n. Xuất bảng cửu
                    chương thứ n</h1>
            </div>
            <div class="form-group">
                <label>Số N</label>
                <input type="number" class="form-control"
                       placeholder="Nhập n" name="n">
            </div>
            <div class="form-group">
                <table border="1px" class="mt-2">
                    <tr>
                        <?php
                        if (isset($_POST['n'])) {
                            $i = isset($_POST['n']) ? (float)trim($_POST['n']) : '';
                            echo "<td>";
                            for ($j = 1; $j <= 10; $j++) {
                                echo "$i x $j = " . ($i * $j);
                                echo "<br>";
                            }
                            echo "</td>";

                        }
                        ?>
                    </tr>
                </table>
            </div>


            <button type="submit" class="btn btn-primary mt-2">Submit</button>
            <input class="btn btn-danger mt-2" type="reset" value="Cancel">
        </form>
    </div>
</div>


</body>

</html>