<?php include 'common.php';
$tong = '';
if (isset($_POST['tinh'])) {
    $mang = explode(',', $_POST['day'] ?? '');
    $tong = 0;
    for ($i = 0; $i < count($mang); $i++) $tong += (float)trim($mang[$i]);
}
?>
<!DOCTYPE html><html><head><meta charset="utf-8"><title>Tổng dãy số</title><link rel="stylesheet" href="style.css"></head><body>
<form name="frmDay" method="post" action="<?= self() ?>" class="box" style="background:#d8f0ee">
<h2 style="background:#2a9d9d;color:#fff">NHẬP VÀ TÍNH TRÊN DÃY SỐ</h2>
<table>
<tr><td>Nhập dãy số:</td><td><input type="text" name="day" value="<?= v('day') ?>"> <span style="color:red">(*)</span></td></tr>
<tr><td></td><td class="btn"><input type="submit" name="tinh" value="Tổng dãy số"></td></tr>
<tr><td>Tổng dãy số:</td><td><input type="text" name="tong" value="<?= $tong ?>" readonly style="background:#cfff9a"></td></tr>
</table>
<p class="note">(*) Các số được nhập cách nhau bằng dấu ","</p>
</form></body></html>
