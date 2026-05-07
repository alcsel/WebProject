<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
header("Location: iletisim.html");
exit;
}

$ad = htmlspecialchars($_POST['ad'] ?? '');
$soyad = htmlspecialchars($_POST['soyad'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$telefon = htmlspecialchars($_POST['telefon'] ?? '');
$konu = htmlspecialchars($_POST['konu'] ?? '');
$mesaj = htmlspecialchars($_POST['mesaj'] ?? '');
$cinsiyet = htmlspecialchars($_POST['cinsiyet'] ?? '');
$kvkk = isset($_POST['kvkk']) ? 'Onaylandı' : 'Onaylanmadı';
$ilgi = isset($_POST['ilgi']) ? implode(', ', array_map('htmlspecialchars', $_POST['ilgi'])) : '—';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Sonucu</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg">
<div class="container">
<a class="navbar-brand" href="index.html">SC_</a>
<div class="ms-auto">
<a href="iletisim.html" class="nav-link" style="color:var(--muted);">← İletişime Geri Dön</a>
</div>
</div>
</nav>

<main class="container py-5">
<p class="section-label">// Sunucu Tarafı İşlem Sonucu</p>
<h2 class="mb-4">Gönderilen Form Verileri</h2>

<div class="alert-acc mb-4">✔ Form verileriniz başarıyla alındı ve işlendi.</div>

<div class="table-responsive">
<table class="table" style="border-color:var(--border);">
<thead>
<tr>
<th style="width:200px;">Alan</th>
<th>Değer</th>
</tr>
</thead>
<tbody>
<tr><td class="mono" style="color:var(--accent);">Ad</td><td><?= $ad ?: '—' ?></td></tr>
<tr><td class="mono" style="color:var(--accent);">Soyad</td><td><?= $soyad ?: '—' ?></td></tr>
<tr><td class="mono" style="color:var(--accent);">E-posta</td><td><?= $email ?: '—' ?></td></tr>
<tr><td class="mono" style="color:var(--accent);">Telefon</td><td><?= $telefon ?: '—' ?></td></tr>
<tr><td class="mono" style="color:var(--accent);">Konu</td><td><?= $konu ?: '—' ?></td></tr>
<tr><td class="mono" style="color:var(--accent);">Cinsiyet</td><td><?= $cinsiyet ?: '—' ?></td></tr>
<tr><td class="mono" style="color:var(--accent);">İlgi Alanları</td><td><?= $ilgi ?></td></tr>
<tr><td class="mono" style="color:var(--accent);">KVKK</td><td><?= $kvkk ?></td></tr>
<tr><td class="mono" style="color:var(--accent);">Mesaj</td><td><?= nl2br($mesaj) ?: '—' ?></td></tr>
<tr><td class="mono" style="color:var(--accent);">İstek Zamanı</td><td><?= date('d.m.Y H:i:s') ?></td></tr>
</tbody>
</table>
</div>

<a href="index.html" class="btn-accent mt-3 d-inline-block">Ana Sayfaya Dön</a>
</main>

<footer>
<div class="container">
<p>© 2025 Selim Çalıcı · B251210378 · Sakarya Üniversitesi</p>
</div>
</footer>
</body>
</html>
