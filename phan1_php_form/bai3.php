<?php include 'common.php';
$tien = '';
if (isset($_POST['tinh'])) { $tien = ((so('moi') ?? 0) - (so('cu') ?? 0)) * (so('dongia') ?? 0); }
?>
<!DOCTYPE html><html><head><meta charset="utf-8"><title>Tiền điện</title>
<link rel="stylesheet" href="style.css"></head><body>
<form name="frmDien" method="post" action="<?= self() ?>" class="box">
<h2>THANH TOÁN TIỀN ĐIỆN</h2>
<table>
<tr><td>Tên chủ hộ:</td><td><input type="text" name="ten" value="<?= v('ten') ?>"></td><td></td></tr>
<tr><td>Chỉ số cũ:</td><td><input type="text" name="cu" value="<?= v('cu') ?>"></td><td>(Kw)</td></tr>
<tr><td>Chỉ số mới:</td><td><input type="text" name="moi" value="<?= v('moi') ?>"></td><td>(Kw)</td></tr>
<tr><td>Đơn giá:</td><td><input type="text" name="dongia" value="<?= v('dongia', '20000') ?>"></td><td>(VNĐ)</td></tr>
<tr><td>Số tiền thanh toán:</td><td><input type="text" name="tien" value="<?= $tien ?>" readonly></td><td>(VNĐ)</td></tr>
<tr><td colspan="3" class="btn"><input type="submit" name="tinh" value="Tính"></td></tr>
</table></form></body></html>
