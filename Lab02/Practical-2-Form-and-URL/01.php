<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01.php</title>
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
            <!-- Truyen bien qua query.php bang form gui bang request -->
            <form action="querystr.php" style="width:40%">
                <div class="form-group">
                    <label for="exampleInputEmail1">Full name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter name" name="username">

                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
                </div>
                <div class="form-group">
                    <label>Gender:</label>
                    <label>Male <input type="radio" value="male" name="gender"></label>
                    <label>Female <input type="radio" value="female"name="gender"></label>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="branch">
                        <option>C.E.</option>
                        <option>Mech</option>
                        <option>E.C.</option>
                        <option>I.T.</option>
                        <option>E.E.</option>
                    </select>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <input class="btn btn-danger" type="reset" value="Cancel">
            </form>
        </div>
    </div>


</body>

</html>