<?php include 'common.php';
$dt = '';
if (isset($_POST['tinh'])) { $dt = (so('dai') ?? 0) * (so('rong') ?? 0); }
?>
<!DOCTYPE html><html><head><meta charset="utf-8"><title>Diện tích hình chữ nhật</title>
<link rel="stylesheet" href="style.css"></head><body>
<form name="frmHCN" method="post" action="<?= self() ?>" class="box">
<h2>DIỆN TÍCH HÌNH CHỮ NHẬT</h2>
<table>
<tr><td>Chiều dài:</td><td><input type="text" name="dai" value="<?= v('dai') ?>"></td></tr>
<tr><td>Chiều rộng:</td><td><input type="text" name="rong" value="<?= v('rong') ?>"></td></tr>
<tr><td>Diện tích:</td><td><input type="text" name="dientich" value="<?= $dt ?>" readonly></td></tr>
<tr><td colspan="2" class="btn"><input type="submit" name="tinh" value="Tính"></td></tr>
</table></form></body></html>
