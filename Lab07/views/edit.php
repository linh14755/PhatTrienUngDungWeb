<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa</title>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h3>Employee - Edit</h3>

    <form method="post" action="index.php?action=eupdate&id=<?php echo $data['empO']->id ?>">
        <div class="form-group">
            <label>Name</label>
            <input value="<?php echo $data['empO']->Name ?>" name="ename" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Surname</label>
            <input value="<?php echo $data['empO']->Surname ?>" name="surname" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input value="<?php echo $data['empO']->email ?>" name="email" type="email" class="form-control">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input value="<?php echo $data['empO']->phone ?>" name="phone" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Department</label>
            <select name="dcode" class="browser-default custom-select">
                <option>Open this select menu</option>
                <?php foreach ($data['phongs'] as $phong) { ?>
                    <option <?php echo ($data['empO']->dcode == $phong['id']) ? 'selected' : '' ?>
                            value="<?php echo $phong['id'] ?>"><?php echo $phong['id'] ?>
                        - <?php echo $phong['Name'] ?></option>
                <?php } ?>

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


</body>
</html>