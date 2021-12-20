<?php
$q = $_GET["q"];
//Khởi tạo obj document
$xmlDoc = new DOMDocument();
//Load file xml
$xmlDoc->load("cd_catalog.xml");

//Get elements
$x = $xmlDoc->getElementsByTagName('ARTIST');

//Duyệt chiều dài tagname
for ($i = 0; $i <= $x->length - 1; $i++) {
//Process only element nodes
//If the node is an element node, the nodeType property will return 1.
//If the node is an attribute node, the nodeType property will return 2.
//If the node is a text node, the nodeType property will return 3.
//If the node is a comment node, the nodeType property will return 8.
    if ($x->item($i)->nodeType == 1) {
        //So sánh value trong element ARTIST với dữ liệu vào
        if ($x->item($i)->childNodes->item(0)->nodeValue == $q) {
            //Nếu bằng nhau thì gán cả parent cho $y
            $y = ($x->item($i)->parentNode);
        }
    }
}
//Duyệt mảng dữ liệu tìm kiếm được
$cd = ($y->childNodes);
for ($i = 0; $i < $cd->length; $i++) {
//Process only element nodes
    if ($cd->item($i)->nodeType == 1) {
        //Nếu kiểu là element thì echo trả về tên element và giá trị của nó
        echo("<b>" . $cd->item($i)->nodeName . ":</b> ");
        echo($cd->item($i)->childNodes->item(0)->nodeValue);
        echo("<br>");
    }
}
?>