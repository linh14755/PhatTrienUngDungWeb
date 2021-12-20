<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2. Create two php pages illustrate _GET method with index.php and get.php</title>
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

<div class="h-100 row align-items-center">
    <div class="d-flex justify-content-center">

        <form action="get-02.php" method="GET">
            <div class="form-group">
                <h1 style="text-transform: uppercase;" class="text-danger">2. Create two php pages illustrate _GET method </br> with index.php and get.php</h1>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Name:</label>
                <input type="text" class="form-control"
                       placeholder="Your name" name="name">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Age:</label>
                <input type="number" class="form-control" placeholder="Your age"
                       name="age">
            </div>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
            <input class="btn btn-danger mt-2" type="reset" value="Cancel">
        </form>
    </div>
</div>


</body>

</html>