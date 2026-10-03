<?php include 'common.php';
define('PI', 3.14);
$dt = $cv = '';
if (isset($_POST['tinh'])) { $r = so('bankinh') ?? 0; $dt = PI * pow($r, 2); $cv = 2 * PI * $r; }
?>
<!DOCTYPE html><html><head><meta charset="utf-8"><title>Hình tròn</title>
<link rel="stylesheet" href="style.css"></head><body>
<form name="frmTron" method="post" action="<?= self() ?>" class="box">
<h2>DIỆN TÍCH và CHU VI<br>HÌNH TRÒN</h2>
<table>
<tr><td>Bán kính:</td><td><input type="text" name="bankinh" value="<?= v('bankinh') ?>"></td></tr>
<tr><td>Diện tích:</td><td><input type="text" name="dientich" value="<?= $dt ?>" readonly></td></tr>
<tr><td>Chu vi:</td><td><input type="text" name="chuvi" value="<?= $cv ?>" readonly></td></tr>
<tr><td colspan="2" class="btn"><input type="submit" name="tinh" value="Tính"></td></tr>
</table></form></body></html>
