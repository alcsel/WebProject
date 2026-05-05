<?php
$dogruEmail = "b251210378@sakarya.edu.tr";
$dogruSifre = "B251210378";

$email = $_POST['email'] ?? '';
$sifre = $_POST['sifre'] ?? '';

if (empty($email) || empty($sifre)) {
header("Location: login.html?hata=bos");
exit;
}

if ($email === $dogruEmail && $sifre === $dogruSifre) {
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hoşgeldiniz</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg">
<div class="container">
<a class="navbar-brand" href="index.html">SC_</a>
</div>
</nav>
<div class="login-wrap">
<div class="login-box" style="text-align:center;">
<div style="font-size:3rem;margin-bottom:1rem;">✔</div>
<div class="login-logo" style="color:var(--text);">Hoşgeldiniz</div>
<h2 style="color:var(--accent);font-family:'Space Mono',monospace;font-size:1.2rem;margin-bottom:1.5rem;">B251210378</h2>
<p style="color:var(--muted);font-size:0.9rem;">Giriş başarıyla gerçekleşti.</p>
<a href="index.html" class="btn-accent mt-4 d-inline-block">Ana Sayfaya Dön</a>
</div>
</div>
</body>
</html>
<?php
} else {
header("Location: login.html?hata=yanlis");
exit;
}
?>
