<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td,
th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<?php
$arr = array(
    array(1, 2, 3, 4),
    array(5, 6, 7, 8),
    array(9, 15, 11, 12),
    array(13, 14, 15, 16),
    array(7, 18, 19, 20),
);

function giamdan($arr)
{
    arsort($arr);
    echo "<table>";
    foreach ($arr as $item) {
        echo '<tr>';
        foreach ($item as $value) {
            echo "<td>" . $value . "</td>";
        }
        echo '</tr>';
    }
    echo "</table>";
}


echo '2. Xuất các phần tử trên đường chéo chính, chéo phụ.</br>';
echo "<table>";
foreach ($arr as $item) {
    echo '<tr>';
    foreach ($item as $value) {
        echo "<td>" . $value . "</td>";
    }
    echo '</tr>';
}
echo "</table>";

echo '<hr/>3. Sắp xếp mảng giảm dần theo chiều kim đồng hồ.. (em không biết làm) </br>';
echo giamdan($arr);