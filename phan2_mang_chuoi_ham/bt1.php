<?php include 'common.php';
$kq = null; $loi = '';
if (isset($_POST['thuchien'])) {
    $n = trim($_POST['n'] ?? '');
    if (!ctype_digit($n) || (int)$n <= 0) $loi = 'n phải là số nguyên dương!';
    else {
        $n = (int)$n; $mang = [];
        for ($i = 0; $i < $n; $i++) $mang[] = rand(-100, 200);
        $chan = 0; $nho100 = 0; $tongam = 0; $vitri0 = [];
        foreach ($mang as $i => $x) {
            if ($x % 2 == 0) $chan++;
            if ($x < 100) $nho100++;
            if ($x < 0) $tongam += $x;
            if ($x == 0) $vitri0[] = $i;
        }
        $sx = $mang; sort($sx);
        $kq = compact('mang', 'chan', 'nho100', 'tongam', 'vitri0', 'sx');
    }
}
?>
<!DOCTYPE html><html><head><meta charset="utf-8"><title>Mảng ngẫu nhiên</title><link rel="stylesheet" href="style.css"></head><body>
<form name="frmN" method="post" action="<?= self() ?>" class="box" style="width:600px">
<h2>MẢNG NGẪU NHIÊN</h2>
<table>
<tr><td>Nhập n:</td><td><input type="text" name="n" value="<?= v('n') ?>"></td>
<td><input type="submit" name="thuchien" value="Thực hiện"></td></tr>
</table>
<?php if ($loi): ?><p class="err"><?= $loi ?></p><?php endif; ?>
<?php if ($kq): ?>
<table style="margin-top:10px;width:90%">
<tr><td><b>Mảng phát sinh:</b></td><td><?= implode(', ', $kq['mang']) ?></td></tr>
<tr><td><b>Số phần tử chẵn:</b></td><td><?= $kq['chan'] ?></td></tr>
<tr><td><b>Số phần tử &lt; 100:</b></td><td><?= $kq['nho100'] ?></td></tr>
<tr><td><b>Tổng các số âm:</b></td><td><?= $kq['tongam'] ?></td></tr>
<tr><td><b>Vị trí phần tử bằng 0:</b></td><td><?= $kq['vitri0'] ? implode(', ', $kq['vitri0']) : 'Không có' ?></td></tr>
<tr><td><b>Mảng sắp tăng dần:</b></td><td><?= implode(', ', $kq['sx']) ?></td></tr>
</table>
<?php endif; ?>
</form></body></html>
