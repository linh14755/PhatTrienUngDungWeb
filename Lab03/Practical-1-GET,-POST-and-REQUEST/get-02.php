<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Get data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <style>
        html,
        body {
            height: 100%
        }
    </style>

</head>
<body>
<div class="h-100 row align-items-center">
    <div class="d-flex flex-column bd-highlight mb-3 text-center">
<!--    //In ra 2 biến name age nhận từ form trong 02.php-->
        <div class="p-2 bd-highlight">
            <h3><?php echo 'Full name: ' . $_GET['name'] ?></h3>
        </div>
        <div class="p-2 bd-highlight">
            <h3><?php echo 'Age: ' . $_GET['age']; ?></h3>
        </div>


    </div>
</div>
</body>
</html>