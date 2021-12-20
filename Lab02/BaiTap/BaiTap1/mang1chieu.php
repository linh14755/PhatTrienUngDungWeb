<style>
    hr{
        height:2px;
        border-width:0;
        color:gray;
        background-color:gray;
    }
</style>
<?php

$arr = [0, 10, 9, 6, 5, 8, 1, 2, 3, 4];

echo '<pre>';
print_r($arr);
echo '</pre>';

function timmax($arr)
{
    return max($arr);
}

function timmin($arr)
{
    return min($arr);
}
function tangdan($arr)
{
    asort($arr);
    foreach ($arr as $c) {
        echo "$c  ";
    }
}
function giamdan($arr)
{
    arsort($arr);
    foreach ($arr as $c) {
        echo "$c  ";
    }
}
function timx($x, $arr)
{
    if (in_array($x, $arr)) {
        echo 'So ' . $x . ' co trong mang';
    } else {
        echo 'So ' . $x . ' khong co trong mang';
    }
}
function capnhatx($xnew, $x, $arr)
{
    if (in_array($x, $arr)) {
        foreach ($arr as $key => $value) {
            if ($value == $x) {
                $arr[$key] = $xnew;
                echo 'So ' . $x . ' trong mang da duoc thay doi bang ' . $xnew . '</br>';
                echo '<pre>';
                print_r($arr);
                echo '</pre>';
            }
        }
    } else {
        echo 'So ' . $x . ' khong co trong mang de cap nhat';
    }
}
function xoaphantu($x, $arr)
{
    if (in_array($x, $arr)) {
        foreach ($arr as $key => $value) {
            if ($value == $x) {
                unset($arr[$key]);
                echo 'So ' . $x . ' trong mang da duoc xoa </br>';
                echo '<pre>';
                print_r($arr);
                echo '</pre>';
            }
        }
    } else {
        echo 'So ' . $x . ' khong co trong mang de xoa';
    }
}

echo '<hr/>2. Viết hàm tìm phần tử max, min trong mảng </br>';
echo 'Phan tu lon nhat trong mang: ' . timmax($arr);
echo '</br>';
echo 'Phan tu nho nhat trong mang: ' . timmin($arr);

echo '<hr>3. Sắp xếp mảng tăng dần, giảm dần </br>';
echo ':tang dan </br>' . tangdan($arr);
echo ':giam dan </br>' . giamdan($arr);

echo '<hr>4. Tìm phần tử có giá trị x trong mảng </br>';
echo timx(11, $arr) . '</br>';
echo timx(10, $arr);

echo '<hr>5. Cập nhật giá trị cho phần tử có giá trị x trong mảng </br>';
echo capnhatx(55, 4, $arr) . '</br>';

echo '<hr>6. Xoá phần tử có giá trị x trong mảng </br>';
echo xoaphantu(4, $arr) . '</br>';