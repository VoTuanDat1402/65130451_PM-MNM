<?php
function cong($a, $b) { return $a + $b; }
function tru($a, $b)  { return $a - $b; }
function nhan($a, $b) { return $a * $b; }
function chia($a, $b) { return $a / $b; }
// Kiểm tra dữ liệu: trả về chuỗi lỗi hoặc '' nếu hợp lệ
function kiem_tra($pt, $a, $b) {
    if (!in_array($pt, ['cong', 'tru', 'nhan', 'chia'])) return 'Chưa chọn phép tính';
    if (!is_numeric($a) || !is_numeric($b)) return 'Dữ liệu nhập vào phải là số';
    if ($pt == 'chia' && (float)$b == 0) return 'Không thể chia cho 0';
    return '';
}
// Điều khiển xuất dữ liệu số thực: tối đa 4 chữ số thập phân, bỏ số 0 thừa
function dinh_dang($x) {
    $s = rtrim(rtrim(number_format($x, 4, '.', ''), '0'), '.');
    return $s === '' || $s === '-0' ? '0' : $s;
}
$ten = ['cong' => 'Cộng', 'tru' => 'Trừ', 'nhan' => 'Nhân', 'chia' => 'Chia'];
$pt = $_POST['pt'] ?? ''; $a = trim($_POST['a'] ?? ''); $b = trim($_POST['b'] ?? '');
$loi = kiem_tra($pt, $a, $b);
if ($loi) {   // dữ liệu không hợp lệ => báo lỗi và tự động quay lại trang trước
    echo '<!DOCTYPE html><meta charset="utf-8"><script>alert(' . json_encode($loi . '!') . ');window.history.back(-1);</script>';
    exit;
}
$a = (float)$a; $b = (float)$b;
$kq = $pt($a, $b);
?>
<!DOCTYPE html><html><head><meta charset="utf-8"><title>Kết quả phép tính</title>
<style>
body{font-family:Tahoma;font-size:13px}
.c{width:480px;margin:30px auto;text-align:center}
h3{color:#336;font-weight:normal}
.l{color:#c0392b;font-weight:bold}
input.t{width:260px;text-align:right;color:#336}
</style></head><body><div class="c">
<h3>PHÉP TÍNH TRÊN HAI SỐ</h3>
<span class="l">Chọn phép tính : <?= $ten[$pt] ?></span><br><br>
<span class="l">Số 1 :</span> <input class="t" type="text" value="<?= dinh_dang($a) ?>" readonly><br><br>
<span class="l">Số 2 :</span> <input class="t" type="text" value="<?= dinh_dang($b) ?>" readonly><br><br>
<span class="l">Kết quả :</span> <input class="t" type="text" value="<?= dinh_dang($kq) ?>" readonly><br><br>
<a href="javascript:window.history.back(-1);">Quay lại trang trước</a>
</div></body></html>
