<?php

require_once 'model/sua.php';
$product = new Sua('cuahangsua');
$id = $_GET['id'];
$product = $product->GetByID($id);

session_start();
$cart = '';
$cart = $_SESSION['cart']; // lấy giá trị trong session để thêm quantity
if (isset($cart[$id])) {
    $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
} else {
    $cart[$id] = [
        'name' => $product['TenSua'],
        'price' => $product['DonGia'],
        'quantity' => 1,
        'image' => $product['image_path']
    ];
}
// Tạo session với key => value

$_SESSION['cart'] = $cart;

//Lấy số lượng sản phẩm đã thêm để hiển thị lên thẻ cart
$cartsNumber = count($_SESSION['cart']);

//echo '<pre>'; print_r($_SESSION['cart']); echo '</pre>';
echo json_encode(array('code' => 200, 'cartNumber' => $cartsNumber));