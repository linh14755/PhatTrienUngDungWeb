<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thuộc tính của tập tin</title>
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

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <!--Trả về tên file của file đang được chạy.-->
            <div class="form-group">
                <h1 style="text-transform: uppercase;" class="text-danger">Thuộc tính của tập tin</h1>
            </div>
            <div class="form-group">
                <label>Tập tin</label>
                <input type="file" class="form-control" name="file_upload">
            </div>
            <div class="form-group mt-2">
                <?php

                function formatBytes($size, $precision = 2)
                {
                    $base = log($size, 1024);
                    $suffixes = array('', 'KB', 'MB', 'GB', 'TB');

                    return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
                }

                if (isset($_FILES['file_upload'])) {
//                    echo '<pre>';
//                    print_r($_FILES['file_upload']);
//                    echo '</pre>';

                    echo '<h4>Tên file: ' . $_FILES['file_upload']['name'] . '</h4>';
                    echo '<h4>Loại File: ' . $_FILES['file_upload']['type'] . '</h4>';
                    echo '<h4>Kích cỡ: ' . formatBytes($_FILES['file_upload']['size']) . '</h4>';
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