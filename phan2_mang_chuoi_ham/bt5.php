<?php include 'common.php';
function xuat_mang($m) { return implode(' ', $m); }
function thay_the($mang, $cu, $moi) {
    for ($i = 0; $i < count($mang); $i++) if ($mang[$i] == $cu) $mang[$i] = $moi;
    return $mang;
}
$mc = $mm = ''; $loi = '';
if (isset($_POST['thaythe'])) {
    $mang = tach_chuoi($_POST['mang'] ?? '');
    $cu = trim($_POST['cu'] ?? ''); $moi = trim($_POST['moi'] ?? '');
    if (!is_numeric($cu) || !is_numeric($moi)) $loi = 'Giá trị cần thay thế và giá trị thay thế phải là số!';
    else { $mc = xuat_mang($mang); $mm = xuat_mang(thay_the($mang, $cu + 0, $moi + 0)); }
}
?>
<!DOCTYPE html><html><head><meta charset="utf-8"><title>Thay thế</title><link rel="stylesheet" href="style.css"></head><body>
<form name="frmThay" method="post" action="<?= self() ?>" class="box" style="background:#fbe0f3;width:560px">
<h2 style="background:#a0166e;color:#fff">THAY THẾ</h2>
<table>
<tr><td>Nhập các phần tử:</td><td><input type="text" style="width:300px" name="mang" value="<?= v('mang') ?>"></td></tr>
<tr><td>Giá trị cần thay thế:</td><td><input type="text" style="width:60px" name="cu" value="<?= v('cu') ?>"></td></tr>
<tr><td>Giá trị thay thế:</td><td><input type="text" style="width:60px" name="moi" value="<?= v('moi') ?>"></td></tr>
<tr><td></td><td><input type="submit" name="thaythe" value="Thay thế"></td></tr>
<tr><td>Mảng cũ:</td><td><input type="text" style="width:300px" value="<?= $mc ?>" readonly></td></tr>
<tr><td>Mảng sau khi thay thế:</td><td><input type="text" style="width:300px" value="<?= $mm ?>" readonly></td></tr>
</table>
<?php if ($loi) echo "<p class='err'>$loi</p>"; ?>
<p class="note"><b>(Ghi chú:</b> Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</p>
</form></body></html>
