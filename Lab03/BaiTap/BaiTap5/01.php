<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc thông tin file ảnh</title>
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
<?php
function outputFiles($path)
{
    // Kiểm tra thư mục có tồn tại hay không
    if (file_exists($path) && is_dir($path)) {
        // Quét tất cả các file trong thư mục
        $result = scandir($path);

        // Lọc ra các thư mục hiện tại (.) và các thư mục cha (..)
        $files = array_diff($result, array('.', '..'));
        $arr = array();
        if (count($files) > 0) {
            // Lặp qua mảng đã trả lại
            foreach ($files as $file) {
                if (is_file("$path/$file")) {
                    // Hiển thị tên File
//                    echo $file . "<br>";
                    $arr[] = $file;
                } else if (is_dir("$path/$file")) {
                    // Gọi đệ quy hàm nếu tìm thấy thư mục
                    outputFiles("$path/$file");
                }
            }
            return $arr;
        } else {
            echo "ERROR: Không có file nào trong thư mục.";
        }
    } else {
        echo "ERROR: Thư mục không tồn tại.";
    }
}

?>


<body>
<div></div>
<div class="h-100 row align-items-center">
    <div class="d-flex justify-content-center">

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <!--Trả về tên file của file đang được chạy.-->
            <div class="form-group">
                <h1 style="text-transform: uppercase;" class="text-danger">Đọc thông tin file ảnh</h1>
            </div>
            <div class="form-group">
                <label for="images">Chọn thư mục hình</label>
                <select id="images" class="form-select" aria-label="Default select example" name="file_dir">
                    <option value="" selected>chọn giá trị</option>
                    <?php
                    $path = './upload';
                    $files = scandir($path);
                    $files = array_diff(scandir($path), array('.', '..'));
                    foreach ($files as $file):
                        ?>
                        <option value="<?php echo $file; ?>"><?php echo $file; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="size">Chọn kích thước</label>
                <select id="size" class="form-select" aria-label="Default select example" name="size_img">
                    <option value="" selected>chọn giá trị</option>
                    <option value="100x100">100x100</option>
                    <option value="150x150">150x150</option>
                    <option value="200x200">200x200</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
            <input class="btn btn-danger mt-2" type="reset" value="Cancel">

            <div class="form-group">
                <div class="d-flex justify-content-center row p-2 " style="max-width: 700px">
                    <?php
                    if (isset($_POST['file_dir']) && $_POST['file_dir'] != '') :
                        $selected_dir = $path . '/' . $_POST['file_dir'];

                        $arr_dir = outputFiles($selected_dir);
                        if (isset($_POST['size_img']) && $_POST['size_img'] != '') {
                            $size_img_w = explode('x', $_POST['size_img'])[0] . 'px';
                            $size_img_h = explode('x', $_POST['size_img'])[1] . 'px';
                        } else {
                            $size_img_w = '120px';
                            $size_img_h = 'auto';
                        }

                        foreach ($arr_dir as $file) {
                            $fileItem = $selected_dir . '/' . $file;
                            ?>
                            <img src="<?php echo $fileItem; ?>"
                                 style="width: <?php echo $size_img_w; ?>;height: <?php echo $size_img_h; ?>"
                                 class="img-fluid m-2 img-thumbnail">
                            <?php
                        }
                    endif; ?>
                </div>

            </div>


        </form>
    </div>
</div>


</body>

</html>