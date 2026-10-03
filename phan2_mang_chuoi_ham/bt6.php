<?php include 'common.php';
function hoan_vi(&$a, &$b) { $t = $a; $a = $b; $b = $t; }
function sap_tang($mang) {
    $n = count($mang);
    for ($i = 0; $i < $n - 1; $i++)
        for ($j = $i + 1; $j < $n; $j++)
            if ($mang[$i] > $mang[$j]) hoan_vi($mang[$i], $mang[$j]);
    return $mang;
}
function sap_giam($mang) {
    $n = count($mang);
    for ($i = 0; $i < $n - 1; $i++)
        for ($j = $i + 1; $j < $n; $j++)
            if ($mang[$i] < $mang[$j]) hoan_vi($mang[$i], $mang[$j]);
    return $mang;
}
$tang = $giam = '';
if (isset($_POST['sx'])) {
    $mang = tach_chuoi($_POST['mang'] ?? '');
    $tang = implode(', ', sap_tang($mang));
    $giam = implode(', ', sap_giam($mang));
}
?>
<!DOCTYPE html><html><head><meta charset="utf-8"><title>Sắp xếp mảng</title><link rel="stylesheet" href="style.css"></head><body>
<form name="frmSX" method="post" action="<?= self() ?>" class="box" style="background:#d8f4f4;width:540px">
<h2 style="background:#2a9d9d;color:#fff">SẮP XẾP MẢNG</h2>
<table>
<tr><td>Nhập mảng:</td><td><input type="text" style="width:280px" name="mang" value="<?= v('mang') ?>"> <span style="color:red">(*)</span></td></tr>
<tr><td></td><td><input type="submit" name="sx" value="Sắp xếp tăng/giảm"></td></tr>
<tr><td colspan="2" style="color:#c00"><b>Sau khi sắp xếp:</b></td></tr>
<tr><td>Tăng dần:</td><td><input type="text" style="width:280px" value="<?= $tang ?>" readonly></td></tr>
<tr><td>Giảm dần:</td><td><input type="text" style="width:280px" value="<?= $giam ?>" readonly></td></tr>
</table>
<p class="note">(*) Các số được nhập cách nhau bằng dấu ","</p>
</form></body></html>
