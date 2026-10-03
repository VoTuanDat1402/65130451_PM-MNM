<?php include 'common.php';
$tong = $kq = '';
if (isset($_POST['xem'])) {
    $t = so('toan') ?? 0; $l = so('ly') ?? 0; $h = so('hoa') ?? 0; $chuan = so('chuan') ?? 0;
    $tong = $t + $l + $h;
    $kq = ($t > 0 && $l > 0 && $h > 0 && $tong >= $chuan) ? 'Đậu' : 'Rớt';
}
?>
<!DOCTYPE html><html><head><meta charset="utf-8"><title>Kết quả thi đại học</title>
<link rel="stylesheet" href="style.css"></head><body>
<form name="frmThi" method="post" action="<?= self() ?>" class="box" style="background:#fde6f5">
<h2 style="background:#e0467c;color:#fff">KẾT QUẢ THI ĐẠI HỌC</h2>
<table>
<tr><td>Toán:</td><td><input type="text" name="toan" value="<?= v('toan') ?>"></td></tr>
<tr><td>Lý:</td><td><input type="text" name="ly" value="<?= v('ly') ?>"></td></tr>
<tr><td>Hoá:</td><td><input type="text" name="hoa" value="<?= v('hoa') ?>"></td></tr>
<tr><td>Điểm chuẩn:</td><td><input type="text" name="chuan" value="<?= v('chuan') ?>"></td></tr>
<tr><td>Tổng điểm:</td><td><input type="text" name="tong" value="<?= $tong ?>" readonly></td></tr>
<tr><td>Kết quả thi:</td><td><input type="text" name="kq" value="<?= $kq ?>" readonly></td></tr>
<tr><td colspan="2" class="btn"><input type="submit" name="xem" value="Xem kết quả"></td></tr>
</table></form></body></html>
