<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("livesearch.xml");
$x = $xmlDoc->getElementsByTagName('link');
//get the q parameter from URL
$q = $_GET["q"];
//lookup all links from the xml file if length of q>0
if (strlen($q) > 0) {
    $hint = "";
    for ($i = 0; $i < ($x->length); $i++) {
        $y = $x->item($i)->getElementsByTagName('title');
        $z = $x->item($i)->getElementsByTagName('url');
        if ($y->item(0)->nodeType == 1) {
            //stristr Trả về một chuỗi được tách bắt đầu từ $q
            if (stristr($y->item(0)->childNodes->item(0)->nodeValue, $q)) {
                //Nếu $hint chưa có gì thì add thẻ a vào hint
                if ($hint == "") {
                    $hint = "<a href='" .
                        $z->item(0)->childNodes->item(0)->nodeValue .
                        "' target='_blank'>" .
                        $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
                } else {
                    //ngược lại nếu hinht đã có dữ liệu thì add dữ liệu và hint cũ tạo thành một mảng a
                    $hint = $hint . "<br /><a href='" .
                        $z->item(0)->childNodes->item(0)->nodeValue .
                        "' target='_blank'>" .
                        $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
                }
            }
        }
    }
}
//Nếu hint rỗng trả về "không tìm thấy"
if ($hint == "") {
    $response = "no suggestion";
} else {
    //Ngược lại gán giá trị $respone và trả về php_ajax_livesearch
    $response = $hint;
}
//output the response
echo $response;
?>