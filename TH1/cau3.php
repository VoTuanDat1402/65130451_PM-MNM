<?php
function isPrime($number) {
    if ($number < 2) return false;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) return false;
    }
    return true;
}

function isSquareNumber($number) {
    if ($number < 0) return false;
    $sq = sqrt($number);
    return ($sq - floor($sq)) == 0;
}

$N = rand(-100, 100);
echo "Giá trị ngẫu nhiên N = <b>$N</b><br><br>";

if ($N > 0) {
    echo "<b>Các ước số của $N là:</b> ";
    for ($i = 1; $i <= $N; $i++) {
        if ($N % $i == 0) {
            echo $i . " ";
        }
    }
    echo "<br><br>";

    if (isPrime($N)) {
        echo "$N <b>là</b> số nguyên tố.<br><br>";
    } else {
        echo "$N <b>không phải là</b> số nguyên tố.<br><br>";
    }

    $sumPrime = 0;
    for ($i = 2; $i < $N; $i++) {
        if (isPrime($i)) {
            $sumPrime += $i;
        }
    }
    echo "<b>Tổng các số nguyên tố nhỏ hơn $N là:</b> $sumPrime<br><br>";

    if (isSquareNumber($N)) {
        echo "$N <b>là</b> số chính phương.<br>";
    } else {
        echo "$N <b>không phải là</b> số chính phương.<br>";
    }
} else {
    echo "$N không phải là số dương (N <= 0), không thực hiện các bài toán nhỏ.";
}
?>