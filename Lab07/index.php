<?php
require_once 'controllers/employeeController.php';
$Econtroller = new EmployeeController();

require_once 'controllers/phongController.php';
$Pcontroller = new PhongController();

?>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <a class="nav-link" href="index.php?action=phong">Phòng</a>
                    <a class="nav-link" href="index.php">Nhân viên</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
<?php

if (!isset($_GET["action"]))
    //Employee
    $Econtroller->run("index");
elseif ($_GET["action"] == 'detail')
    $Econtroller->run("detail");
elseif ($_GET["action"] == 'eadd')
    $Econtroller->run("eadd");
elseif ($_GET["action"] == 'estore')
    $Econtroller->run("estore");
elseif ($_GET["action"] == 'eedit')
    $Econtroller->run("eedit");
elseif ($_GET["action"] == 'eupdate')
    $Econtroller->run("eupdate");
elseif ($_GET["action"] == 'edelete')
    $Econtroller->run("edelete");


//Department
elseif ($_GET["action"] == 'phong')
    $Pcontroller->run("index");
elseif ($_GET["action"] == 'phongchitiet')
    $Pcontroller->run("phongchitiet");
elseif ($_GET["action"] == 'phongadd')
    $Pcontroller->run("phongadd");
elseif ($_GET["action"] == 'phongstore')
    $Pcontroller->run("phongstore");
elseif ($_GET["action"] == 'phongedit')
    $Pcontroller->run("phongedit");
elseif ($_GET["action"] == 'phongupdate')
    $Pcontroller->run("phongupdate");
elseif ($_GET["action"] == 'phongdelete')
    $Pcontroller->run("phongdelete");
?>