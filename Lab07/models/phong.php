<?php

class Phong
{
    private $Conn;
    public $Id;
    public $Name;
    public $Surname;
    public $Email;
    public $Phone;

    public function __construct($connection)
    {
        $this->Conn = $connection;
    }

    public function getAll()
    {
        $sql = "Select * from department";
        $cmd = $this->Conn->prepare($sql);
        $cmd->execute();
        $result = $cmd->fetchAll();
        $this->Conn = null;
        return $result;
    }

    public function getById($id)
    {
        $sql = "Select * from department where id = :id";
        $cmd = $this->Conn->prepare($sql);
        $cmd->execute(array("id" => $id));
        $result = $cmd->fetchObject();
        $this->Conn = null;
        return $result;
    }

    public function Insert($tenphong, $soluong)
    {
        $sql = "INSERT INTO department VALUES(NULL, '" . $tenphong . "', '" . $soluong . "')";

        $cmd = $this->Conn->prepare($sql);
        $cmd->execute();

    }

    public function Update($id, $tenphong, $soluong)
    {
        $sql = "UPDATE department SET Name = '" . $tenphong . "', NumberOfStaff= '" . $soluong . "' WHERE id = " . $id . "";
        $cmd = $this->Conn->prepare($sql);
        $cmd->execute();
    }

    public function Delete($id)
    {
        $sql = "DELETE FROM department WHERE id=" . $id . "";
        $cmd = $this->Conn->prepare($sql);
        $cmd->execute();
    }
}

?>