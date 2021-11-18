<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm</title>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h3>Derpartment - Add</h3>

        <form method="post" action="index.php?action=phongstore">
            <div class="form-group">
                <label>Tên phòng</label>
                <input name="tenphong" type="text" class="form-control" placeholder="Tên phòng">
            </div>
            <div class="form-group">
                <label>Số lượng nhân viên</label>
                <input name="soluong" type="number" class="form-control" placeholder="Số lượng" value="0">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>
</html>