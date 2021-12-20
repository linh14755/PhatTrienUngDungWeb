<?php
require_once '../sqlconnect/entity.php';

class HangSua extends Entity
{
    function GetAll()
    {
        return $this->mysql->GetAll("hangsua");
    }

    function GetByID($id)
    {
        $query = "select * from hangsua where MaHS ='" . $id . "'";
        $result = $this->mysql->MyQuery($query);
        return mysqli_fetch_array($result);
    }

    public function Insert($mahs, $tenhs, $diachi, $dienthoai, $email)
    {
        $query = "insert into hangsua values ('" . $mahs . "','" . $tenhs . "','" . $diachi . "','" . $dienthoai . "','" . $email . "')";

        return $this->mysql->MyQuery($query);
    }

    public function Delete($mahs)
    {
        $query = "delete from hangsua where MaHS = '" . $mahs . "'";
        return $this->mysql->MyQuery($query);
    }

    public function Update($mahs, $tenhs, $diachi, $dienthoai, $email)
    {
        $query = "update hangsua "
            . "set TenHS = '" . $tenhs
            . "', DiaChi = '" . $diachi
            . "', DienThoai = '" . $dienthoai
            . "', Email = '" . $email
            . "' where MaHS = '" . $mahs . "'";
        return $this->mysql->MyQuery($query);
    }
}