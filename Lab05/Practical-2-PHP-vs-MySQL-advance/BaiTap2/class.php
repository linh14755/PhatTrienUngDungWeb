<?php
require_once 'entity.php';

class Lop extends Entity
{
    function GetAll()
    {
        return $this->mysql->GetAll("Lop");
    }

    public function GetByID($malop)
    {
        $query = "select * from Lop where MaLop ='" . $malop . "'";
        $result = $this->mysql->MyQuery($query);
        return mysqli_fetch_array($result);
    }

    public function Insert($malop, $tenlop)
    {
        $query = "insert into Lop values ('" . $malop . "','" . $tenlop . "')";
        return $this->mysql->MyQuery($query);
    }

    public function Delete($malop)
    {
        $query = "delete from Lop where MaLop = '" . $malop . "'";
        return $this->mysql->MyQuery($query);
    }

    public function Update($malopold, $malopnew, $tenlop)
    {
        $query = "update Lop set MaLop = '" . $malopnew
            . ", TenLop = '" . $tenlop
            . "' where MaLop = '" . $malopold . "'";
        echo $query;
        return $this->mysql->MyQuery($query);
    }
}