<?php
if (file_exists('../sqlconnect/entity.php')) {
    require_once '../sqlconnect/entity.php';
}

if (file_exists('./sqlconnect/entity.php')) {
    require_once './sqlconnect/entity.php';
}


class Sua extends Entity
{
    function GetAll()
    {
        return $this->mysql->GetAll("sua");
    }

    function GetByID($id)
    {
        $query = "select * from sua where ID ='" . $id . "'";
        $result = $this->mysql->MyQuery($query);
        return mysqli_fetch_array($result);
    }

    public function Insert($tensua, $hangsua, $loaisua, $trongluong, $donggia, $image_path)
    {
        $query = "insert into sua(TenSua, HangSua, LoaiSua, TrongLuong, DonGia, image_path) values ('" . $tensua . "','" . $hangsua . "','" . $loaisua . "','" . $trongluong . "','" . $donggia . "','" . $image_path . "')";

        return $this->mysql->MyQuery($query);
    }

    public function Delete($id)
    {
        $query = "delete from sua where ID = '" . $id . "'";
        return $this->mysql->MyQuery($query);
    }

    public function Update($id, $tensua, $hangsua, $loaisua, $trongluong, $dongia, $feature_path)
    {
        $query = "update sua "
            . "set TenSua = '" . $tensua
            . "', HangSua = '" . $hangsua
            . "', LoaiSua = '" . $loaisua
            . "', TrongLuong = '" . $trongluong
            . "', DonGia = '" . $dongia
            . "', image_path = '" . $feature_path
            . "' where ID = '" . $id . "'";

        return $this->mysql->MyQuery($query);
    }
}