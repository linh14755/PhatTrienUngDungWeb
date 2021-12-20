<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2. The example below shows how to use _FILES by upload file to Server</title>
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

        <form action="upload.php" method="post" enctype="multipart/form-data">
            <!-- Dùng enctype="multipart/form-data" để up load file qua form-->
            <div class="form-group">
                <h1 style="text-transform: uppercase;" class="text-danger">2. The example below shows how to use _FILES</br>
                    by upload file to Server</h1>
            </div>
            <div class="form-group">
                <label for="file">File</label>
                <input type="file" class="form-control" id="file" name="file_upload" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary mt-2">Upload</button>
            <input class="btn btn-danger mt-2" type="reset" value="Cancel">
        </form>
    </div>
</div>


</body>

</html>