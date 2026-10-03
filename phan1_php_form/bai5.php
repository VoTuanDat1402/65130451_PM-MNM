<?php include 'common.php';
$tien = ''; $loi = '';
// Quy cách: 10h-17h: 20.000đ/giờ ; 17h-24h: 45.000đ/giờ ; ngoài 10h-24h là giờ nghỉ
function tinh_karaoke($bd, $kt) {
    $bd = max($bd, 10); $kt = min($kt, 24);
    $g1 = max(0, min($kt, 17) - $bd);   // số giờ trong khung 10h-17h
    $g2 = max(0, $kt - max($bd, 17));   // số giờ trong khung 17h-24h
    return $g1 * 20000 + $g2 * 45000;
}
if (isset($_POST['tinh'])) {
    $bd = so('bd'); $kt = so('kt');
    if ($bd === null || $kt === null) $loi = 'Vui lòng nhập giờ hợp lệ';
    elseif ($kt <= $bd) $loi = 'Giờ kết thúc phải > Giờ bắt đầu';
    else $tien = tinh_karaoke($bd, $kt);
}
?>
<!DOCTYPE html><html><head><meta charset="utf-8"><title>Tính tiền Karaoke</title>
<link rel="stylesheet" href="style.css"></head><body>
<form name="frmKaraoke" method="post" action="<?= self() ?>" class="box" style="background:#1a9a9a;color:#fff">
<h2 style="background:#0b7a7a;color:#fff">TÍNH TIỀN KARAOKE</h2>
<table>
<tr><td>Giờ bắt đầu:</td><td><input type="text" name="bd" value="<?= v('bd') ?>"></td><td>(h)</td></tr>
<tr><td>Giờ kết thúc:</td><td><input type="text" name="kt" value="<?= v('kt') ?>"></td><td>(h)</td></tr>
<tr><td>Tiền thanh toán:</td><td><input type="text" name="tien" value="<?= $tien ?>" readonly style="background:#ffffa8"></td><td>(VNĐ)</td></tr>
<tr><td colspan="3" class="btn"><input type="submit" name="tinh" value="Tính tiền"></td></tr>
<?php if ($loi): ?><tr><td colspan="3" class="err" style="color:#ffe680"><?= $loi ?></td></tr><?php endif; ?>
</table></form></body></html>
