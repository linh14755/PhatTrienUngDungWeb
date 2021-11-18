<?php

class Employee
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
        $sql = "Select * from employees,department where employees.dcode = department.id";
        $cmd = $this->Conn->prepare($sql);
        $cmd->execute();
        $result = $cmd->fetchAll();
        $this->Conn = null;
        return $result;
    }

    public function getById($id)
    {
        $sql = "Select * from employees where id = ".$id."";
        $cmd = $this->Conn->prepare($sql);
        $cmd->execute();
        $result = $cmd->fetchObject();
        $this->Conn = null;
        return $result;
    }

    public function Insert($name, $surname, $email, $phone, $dcode)
    {
        $sql = "INSERT INTO `employees` (`id`, `Name`, `Surname`, `email`, `phone`, `dcode`) VALUES (NULL, '" . $name . "', '" . $surname . "', '" . $email . "', '" . $phone . "', '" . $dcode . "');";

        $cmd = $this->Conn->prepare($sql);
        $cmd->execute();

    }

    public function Update($id, $name, $surname, $email, $phone, $dcode)
    {
        $sql = "UPDATE `employees` SET `Name` = '" . $name . "', `Surname` = '" . $surname . "', `email` = '" . $email . "', `phone` = '" . $phone . "', `dcode` = '" . $dcode . "' WHERE `employees`.`id` = " . $id . "";
        $cmd = $this->Conn->prepare($sql);
        $cmd->execute();
    }

    public function Delete($id)
    {
        $sql = "DELETE FROM `employees` WHERE `employees`.`id` = " . $id . "";
        $cmd = $this->Conn->prepare($sql);
        $cmd->execute();
    }
}

?>