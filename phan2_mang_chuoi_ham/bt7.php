<?php include 'common.php';
$mang_can  = ["Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm"];
$mang_chi  = ["Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất"];
$mang_hinh = ["hoi.jpg", "ty.jpg", "suu.jpg", "dan.jpg", "mao.jpg", "thin.gif", "ran.jpg", "ngo.jpg", "mui.jpg", "than.gif", "dau.jpg", "tuat.jpg"];
$mang_icon = ["🐗", "🐭", "🐮", "🐯", "🐱", "🐲", "🐍", "🐴", "🐐", "🐵", "🐔", "🐶"];
$nam_al = ''; $hinh_anh = ''; $loi = '';
if (isset($_POST['doi'])) {
    $nam = trim($_POST['nam'] ?? '');
    if (!ctype_digit($nam) || (int)$nam < 4) $loi = 'Năm dương lịch không hợp lệ!';
    else {
        $nam = (int)$nam - 3;
        $can = $nam % 10; $chi = $nam % 12;
        $nam_al = $mang_can[$can] . ' ' . $mang_chi[$chi];
        $file = "12con_giap/" . $mang_hinh[$chi];
        // Có file ảnh trong thư mục 12con_giap thì dùng ảnh, nếu chưa có thì hiện biểu tượng thay thế
        $hinh_anh = file_exists($file) ? "<img src='$file' height='120'>" : "<span style='font-size:90px'>{$mang_icon[$chi]}</span>";
    }
}
?>
<!DOCTYPE html><html><head><meta charset="utf-8"><title>Năm âm lịch</title><link rel="stylesheet" href="style.css"></head><body>
<form name="frmAL" method="post" action="<?= self() ?>" class="box" style="background:#d6e6ff;width:460px">
<h2 style="background:#1a5fbf;color:#fff">TÍNH NĂM ÂM LỊCH</h2>
<table>
<tr><td>Năm dương lịch</td><td></td><td>Năm âm lịch</td></tr>
<tr><td><input type="text" style="width:130px" name="nam" value="<?= v('nam') ?>"></td>
<td><input type="submit" name="doi" value="=>"></td>
<td><input type="text" style="width:130px;background:#ffffb0" value="<?= $nam_al ?>" readonly></td></tr>
</table>
<?php if ($loi) echo "<p class='err'>$loi</p>"; ?>
<div style="text-align:center;margin-top:10px"><?= $hinh_anh ?></div>
</form></body></html>
