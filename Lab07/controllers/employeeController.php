<?php
require_once 'libs/connection.php';
require_once 'models/employee.php';

require_once 'libs/connection.php';
require_once 'models/phong.php';

class EmployeeController
{
    private $Connection;

    public function __construct()
    {
        $conn = new Connection();
        $this->Connection = $conn->Connection();
    }

    public function run($action)
    {
        switch ($action) {
            case "index":
                $this->index();
                break;
            case "detail":
                $this->detail();
                break;
            case "eadd":
                $this->add();
                break;
            case "estore":
                $this->store();
                break;
            case "eedit":
                $this->edit();
                break;
            case "eupdate":
                $this->update();
                break;
            case "edelete":
                $this->delete();
                break;
        }
    }

    public function index()
    {
        $emp = new Employee($this->Connection);
        $empList = $emp->getAll();
        $this->view("index", array(
            "ListEmp" => $empList,
            "title" => "MVC List"
        ));
    }

    public function detail()
    {
        $emp = new Employee($this->Connection);
        $id = $_GET["id"];

        $empObj = $emp->getById($id);
        $this->view("detail", array(
            "emp" => $empObj,
            "title" => "MVC Obj"
        ));
    }

    public function add()
    {
        $phong = new Phong($this->Connection);
        $phongs = $phong->getAll();
        $this->view("add", array(
            "phongs" => $phongs
        ));

    }

    public function store()
    {

        $emp = new Employee($this->Connection);
        $name = (isset($_POST['ename'])) ? $_POST['ename'] : '';
        $surname = (isset($_POST['surname'])) ? $_POST['surname'] : '';
        $email = (isset($_POST['email'])) ? $_POST['email'] : '';
        $phone = (isset($_POST['phone'])) ? $_POST['phone'] : '';
        $dcode = (isset($_POST['dcode'])) ? $_POST['dcode'] : '';
        $emp->Insert($name, $surname, $email, $phone, $dcode);
        $this->index();
    }

    public function edit()
    {
        $id = $_GET["id"];
        $emp = new Employee($this->Connection);
        $phong = new Phong($this->Connection);
        $phongs = $phong->getAll();

        $empObj = $emp->getById($id);
        $this->view("edit", array(
            "empO" => $empObj,
            "phongs" => $phongs,
            "title" => "MVC Obj"
        ));
    }

    public function update()
    {
        $emp = new Employee($this->Connection);
        $name = (isset($_POST['ename'])) ? $_POST['ename'] : '';
        $surname = (isset($_POST['surname'])) ? $_POST['surname'] : '';
        $email = (isset($_POST['email'])) ? $_POST['email'] : '';
        $phone = (isset($_POST['phone'])) ? $_POST['phone'] : '';
        $dcode = (isset($_POST['dcode'])) ? $_POST['dcode'] : '';
        $id = $_GET['id'];

        $emp->Update($id, $name, $surname, $email, $phone, $dcode);

        $this->index();
    }

    public function delete()
    {
        $id = $_GET['id'];
        $emp = new Employee($this->Connection);
        $emp->Delete($id);

        $this->index();
    }

    public function view($path, $dt)
    {
        $data = $dt;
        require_once "views/" . $path . ".php";
    }
}

?>