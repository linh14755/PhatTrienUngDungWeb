<?php
require_once 'libs/connection.php';
require_once 'models/phong.php';

class PhongController
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
            case "phongchitiet":
                $this->detail();
                break;
            case "phongadd":
                $this->add();
                break;
            case "phongstore":
                $this->store();
                break;
            case "phongedit":
                $this->edit();
                break;
            case "phongupdate":
                $this->update();
                break;
            case "phongdelete":
                $this->delete();
                break;
        }
    }

    public function index()
    {
        $emp = new Phong($this->Connection);
        $empList = $emp->getAll();
        $this->view("phong/index", array(
            "ListP" => $empList,
            "title" => "MVC List"
        ));
    }

    public function detail()
    {
        $emp = new Phong($this->Connection);
        $id = $_GET["id"];
        $empObj = $emp->getById($id);
        $this->view("phong/detail", array(
            "phong" => $empObj,
            "title" => "MVC Obj"
        ));
    }

    public function add()
    {
        require_once "views/phong/add.php";
    }

    public function store()
    {

        $emp = new Phong($this->Connection);
        $tenphong = (isset($_POST['tenphong'])) ? $_POST['tenphong'] : '';
        $soluong = (isset($_POST['soluong'])) ? $_POST['soluong'] : '';
        $emp->Insert($tenphong, $soluong);

        $this->index();
    }

    public function edit()
    {
        $id = $_GET["id"];
        $emp = new Phong($this->Connection);
        $empObj = $emp->getById($id);
        $this->view("phong/edit", array(
            "phong" => $empObj,
            "title" => "MVC Obj"
        ));
    }

    public function update()
    {
        $emp = new Phong($this->Connection);
        $tenphong = (isset($_POST['tenphong'])) ? $_POST['tenphong'] : '';
        $soluong = (isset($_POST['soluong'])) ? $_POST['soluong'] : '';
        $id = $_GET['id'];
        $emp->Update($id, $tenphong, $soluong);

        $this->index();
    }

    public function delete()
    {
        $id = $_GET['id'];
        $emp = new Phong($this->Connection);
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