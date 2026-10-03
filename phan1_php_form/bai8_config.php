<?php
function h($k) { return htmlspecialchars($_POST[$k] ?? ''); }
$study = isset($_POST['study']) ? implode(', ', array_map('htmlspecialchars', $_POST['study'])) : '(không chọn)';
// Ghi chú nhiều dòng => gộp thành 1 dòng như hình mẫu
$note = htmlspecialchars(preg_replace('/\s*[\r\n]+\s*/', ' ', trim($_POST['note'] ?? '')));
?>
<!DOCTYPE html><html><head><meta charset="utf-8"><title>Config</title></head>
<body style="font-family:'Times New Roman';font-size:16px">
Bạn đã nhập thành công, dưới đây là những thông tin bạn đã nhập:<br>
Họ tên: <?= h('fullname') ?><br>
Address: <?= h('address') ?><br>
Phone: <?= h('phone') ?><br>
Gender: <?= h('gender') ?><br>
Country: <?= h('country') ?><br>
Study: <?= $study ?><br>
Note: <?= $note ?><br><br>
<input type="button" value="Quay về" onclick="window.history.back();">
</body></html>
