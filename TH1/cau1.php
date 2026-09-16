<?php
$N = rand(1, 100);
echo "Giá trị ngẫu nhiên N = <b>$N</b><br>";
echo "Các số chẵn trong khoảng từ 1 đến $N là: ";

for ($i = 2; $i <= $N; $i += 2) {
    echo $i . " ";
}
?>