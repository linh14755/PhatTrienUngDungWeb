<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Máy Tính</title>
</head>
<script>
    function calc(type) {

        var n1 = $('#num1').val();
        var n2 = $('#num2').val();

        console.log(n1);
        console.log(n2);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                $('#result1').html('Result: ' + this.responseText);
            }
        }
        xmlhttp.open("GET", "cal_handle.php?num1=" + n1 + "&num2=" + n2 + "&type=" + type, true);
        xmlhttp.send();

    }

    function resetVal() {
        $('#result1').html('Result: 0');
    }
</script>
<body>
<form>

    <div class="d-flex justify-content-center mt-5">
        <h2>MÁY TÍNH</h2>
    </div>
    <div class="d-flex justify-content-center">

        <div class="form-group">
            <label>Số thứ nhất</label>
            <input id="num1" type="number" class="form-control" placeholder="Enter number 1" value="0">
        </div>
    </div>
    <div id="n2" class="d-flex justify-content-center">

        <div class="form-group">
            <label>Số thứ hai</label>
            <input id="num2" type="number" class="form-control" placeholder="Enter number 2" value="0">
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="d-flex justify-content-start m-2">
            <button type="button" class="btn btn-primary mr-2" onclick="calc('plus')">+</button>
            <button type="button" class="btn btn-secondary mr-2" onclick="calc('-')">-</button>
            <button type="button" class="btn btn-success mr-2" onclick="calc('*')">*</button>
            <button type="button" class="btn btn-danger mr-2" onclick="calc('/')">/</button>

        </div>
    </div>
    <div class="d-flex justify-content-center">

        <button type="reset" class="btn btn-danger mr-2" onclick="resetVal()">Reset</button>
    </div>
    <div class="d-flex justify-content-center">
        <p id="result1" class="text-justify">Result: 0</p>
    </div>
</form>

</body>
</html>

