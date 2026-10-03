<?php include 'common.php'; ?>
<!DOCTYPE html><html><head><meta charset="utf-8"><title>Phép tính</title>
<style>
body{font-family:Tahoma;font-size:13px}
.c{width:480px;margin:30px auto;text-align:center}
h3{color:#336;font-weight:normal}
.l{color:#c0392b;font-weight:bold}
input.t{width:260px;text-align:right;color:#336}
</style></head><body><div class="c">
<h3>PHÉP TÍNH TRÊN HAI SỐ</h3>
<form method="post" action="bai6_ketqua.php">
<span class="l">Chọn phép tính :</span>
<label><input type="radio" name="pt" value="cong"> Cộng</label>
<label><input type="radio" name="pt" value="tru"> Trừ</label>
<label><input type="radio" name="pt" value="nhan" checked> Nhân</label>
<label><input type="radio" name="pt" value="chia"> Chia</label><br><br>
<span class="l">Số thứ nhất :</span> <input class="t" type="text" name="a"><br><br>
<span class="l">Số thứ hai :</span> <input class="t" type="text" name="b"><br><br>
<input type="submit" value="Tính">
</form></div></body></html>
