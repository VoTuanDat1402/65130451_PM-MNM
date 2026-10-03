<?php include 'common.php';
// Trả về vị trí (bắt đầu từ 1) hoặc -1 nếu không tìm thấy
function tim_kiem($mang, $gia_tri) {
    for ($i = 0; $i < count($mang); $i++) if ($mang[$i] == $gia_tri) return $i + 1;
    return -1;
}
$mk = $kq = '';
if (isset($_POST['tim'])) {
    $mang = tach_chuoi($_POST['mang'] ?? '');
    $x = trim($_POST['x'] ?? '');
    $mk = implode(', ', $mang);
    if (!is_numeric($x)) $kq = 'Vui lòng nhập số cần tìm hợp lệ';
    else {
        $vt = tim_kiem($mang, $x);
        $kq = $vt > 0 ? "Đã tìm thấy $x tại vị trí thứ $vt của mảng" : "Không tìm thấy $x trong mảng";
    }
}
?>
<!DOCTYPE html><html><head><meta charset="utf-8"><title>Tìm kiếm</title><link rel="stylesheet" href="style.css"></head><body>
<form name="frmTim" method="post" action="<?= self() ?>" class="box" style="background:#d7ece0;width:560px">
<h2 style="background:#2a9d8f;color:#fff">TÌM KIẾM</h2>
<table>
<tr><td>Nhập mảng:</td><td><input type="text" style="width:300px" name="mang" value="<?= v('mang') ?>"></td></tr>
<tr><td>Nhập số cần tìm:</td><td><input type="text" style="width:60px" name="x" value="<?= v('x') ?>"></td></tr>
<tr><td></td><td><input type="submit" name="tim" value="Tìm kiếm"></td></tr>
<tr><td>Mảng:</td><td><input type="text" style="width:300px" value="<?= $mk ?>" readonly></td></tr>
<tr><td>Kết quả tìm kiếm:</td><td><input type="text" style="width:300px;color:red" value="<?= $kq ?>" readonly></td></tr>
</table>
<p class="note">(Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</p>
</form></body></html>
