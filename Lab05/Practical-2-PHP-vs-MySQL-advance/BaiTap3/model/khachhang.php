<?php
require_once '../sqlconnect/entity.php';

class KhachHang extends Entity
{
    function GetAll()
    {
        return $this->mysql->GetAll("khachhang");
    }

    function GetByID($id)
    {
        $query = "select * from khachhang where MaKH ='" . $id . "'";
        $result = $this->mysql->MyQuery($query);
        return mysqli_fetch_array($result);
    }

    public function Insert($makh, $tenkh, $gioitinh, $diachi, $dienthoai)
    {
        $query = "insert into khachhang values ('" . $makh . "','" . $tenkh . "','" . $gioitinh . "','" . $diachi . "','" . $dienthoai . "')";

        return $this->mysql->MyQuery($query);
    }

    public function Delete($makh)
    {
        $query = "delete from khachhang where MaKH = '" . $makh . "'";

        return $this->mysql->MyQuery($query);
    }

    public function Update($makh, $tenkh, $gioitinh, $diachi, $dienthoai)
    {
        $query = "update khachhang "
            . "set TenKH = '" . $tenkh
            . "', GioiTinh = '" . $gioitinh
            . "', DiaChi = '" . $diachi
            . "', SoDT = '" . $dienthoai
            . "' where MaKH = '" . $makh . "'";

        return $this->mysql->MyQuery($query);
    }
}