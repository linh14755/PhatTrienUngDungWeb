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
    <h3>Employee - Add</h3>

    <form method="post" action="index.php?action=estore">
        <div class="form-group">
            <label>Name</label>
            <input name="ename" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Surname</label>
            <input name="surname" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input name="email" type="email" class="form-control">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input name="phone" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Department</label>
            <select name="dcode" class="browser-default custom-select">
                <option selected>Open this select menu</option>
                <?php foreach ($data['phongs'] as $phong) { ?>
                    <option value="<?php echo $phong['id'] ?>"><?php echo $phong['id'] ?> - <?php echo $phong['Name'] ?></option>
                <?php } ?>

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


</body>
</html>