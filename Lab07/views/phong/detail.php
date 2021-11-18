<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiế phòng</title>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h3>Derpartment - Detail</h3>
    <div class="row">
        <div class="col-lg-4">
            ID =
        </div>
        <div class="col-lg-8">
            <?php echo $data["phong"]->id ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            Name =
        </div>
        <div class="col-lg-8">
            <?php echo $data["phong"]->Name ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            Số lượng =
        </div>
        <div class="col-lg-8">
            <?php echo $data["phong"]->NumberOfStaff ?>
        </div>
    </div>

</div>
</body>
</html>