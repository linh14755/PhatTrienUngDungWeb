<?php
require_once 'entity.php';

class SinhVien extends Entity
{

    function GetAll()
    {
        return $this->mysql->GetAll("SinhVien");
    }

    public function GetByID($mssv)
    {
        $query = "select * from SinhVien where MSSV='" . $mssv . "'";
        $result = $this->mysql->MyQuery($query);
        return mysqli_fetch_array($result);
    }

    public function Insert($mssv, $hoten, $lop, $tuoi)
    {
        $query = "insert into SinhVien values ('" . $mssv . "','" . $hoten . "','" . $lop . "','" . $tuoi . "')";
        return $this->mysql->MyQuery($query);
    }

    public function Delete($mssv)
    {
        $query = "delete from SinhVien where mssv = '" . $mssv . "'";
        return $this->mysql->MyQuery($query);
    }

    public function Update($mssvold, $mssvnew, $hoten, $tuoi, $lop)
    {
        $query = "update SinhVien set mssv = '" . $mssvnew
            . "', HoTen = '" . $hoten
            . "', Tuoi = " . $tuoi
            . ", Malop = '" . $lop
            . "' where MSSV = '" . $mssvold . "'";
        echo $query;
        return $this->mysql->MyQuery($query);
    }
}