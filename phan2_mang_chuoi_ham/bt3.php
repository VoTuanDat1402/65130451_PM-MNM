<?php include 'common.php';
function tao_mang($n) { $m = []; for ($i = 0; $i < $n; $i++) $m[] = rand(0, 20); return $m; }
function xuat_mang($m) { return implode(' ', $m); }
function tinh_tong($m) { $t = 0; foreach ($m as $x) $t += $x; return $t; }
function tim_max($m) { $max = $m[0]; foreach ($m as $x) if ($x > $max) $max = $x; return $max; }
function tim_min($m) { $min = $m[0]; foreach ($m as $x) if ($x < $min) $min = $x; return $min; }
$mk = $max = $min = $tong = ''; $loi = '';
if (isset($_POST['pst'])) {
    $n = trim($_POST['n'] ?? '');
    if (!ctype_digit($n) || (int)$n <= 0) $loi = 'Số phần tử phải là số nguyên dương!';
    else {
        $mang = tao_mang((int)$n);
        $mk = xuat_mang($mang); $tong = tinh_tong($mang);
        $max = tim_max($mang); $min = tim_min($mang);
    }
}
?>
<!DOCTYPE html><html><head><meta charset="utf-8"><title>Phát sinh mảng</title><link rel="stylesheet" href="style.css"></head><body>
<form name="frmMang" method="post" action="<?= self() ?>" class="box" style="background:#f9d6f0;width:520px">
<h2 style="background:#a0166e;color:#fff">PHÁT SINH MẢNG VÀ TÍNH TOÁN</h2>
<table>
<tr><td>Nhập số phần tử:</td><td><input type="text" name="n" value="<?= v('n') ?>"></td></tr>
<tr><td></td><td><input type="submit" name="pst" value="Phát sinh và tính toán"></td></tr>
<tr><td>Mảng:</td><td><input type="text" style="width:300px" value="<?= $mk ?>" readonly></td></tr>
<tr><td>GTLN (MAX) trong mảng:</td><td><input type="text" value="<?= $max ?>" readonly></td></tr>
<tr><td>GTNN (MIN) trong mảng:</td><td><input type="text" value="<?= $min ?>" readonly></td></tr>
<tr><td>Tổng mảng:</td><td><input type="text" value="<?= $tong ?>" readonly></td></tr>
</table>
<?php if ($loi) echo "<p class='err'>$loi</p>"; ?>
<p class="note"><b>(Ghi chú:</b> Các phần tử trong mảng sẽ có giá trị từ 0 đến 20)</p>
</form></body></html>
