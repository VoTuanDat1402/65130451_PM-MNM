<?php
$trang = ['trangchu' => 'Trang chủ', 'gioithieu' => 'Giới thiệu', 'tintuc' => 'Tin tức',
          'lienhe' => 'Liên hệ', 'diendan' => 'Diễn đàn'];
$p = $_GET['page'] ?? 'trangchu';
if (!isset($trang[$p])) $p = 'trangchu';   // chỉ cho phép các trang trong danh sách
?>
<!DOCTYPE html><html><head><meta charset="utf-8"><title>Website của chúng tôi</title>
<style>
body{font-family:Tahoma;margin:0}
header{background:#2c3e50;color:#fff;padding:15px 30px;font-size:20px}
nav{background:#34495e}
nav a{display:inline-block;padding:12px 20px;color:#fff;text-decoration:none}
nav a:hover,nav a.on{background:#e67e22}
main{padding:30px;min-height:250px}
</style></head><body>
<header>WEBSITE CỦA CHÚNG TÔI</header>
<nav><?php foreach ($trang as $k => $t): ?>
<a href="index.php?page=<?= $k ?>" class="<?= $k == $p ? 'on' : '' ?>"><?= $t ?></a>
<?php endforeach; ?></nav>
<main><?php include $p . '.php'; ?></main>
</body></html>
