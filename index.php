<?php
declare(strict_types=1);
$percobaan = [
    'constructor.php' => 'Percobaan 1 — Constructor dan nilai default',
    'buku.php' => 'Percobaan 2 — Class Buku',
    'destructor.php' => 'Percobaan 3 — Destructor dan alias object',
    'atribut_dinamis.php' => 'Percobaan 4 — Atribut dinamis',
    'overloading_method.php' => 'Percobaan 5 — Overloading method dengan __call()',
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum PBO Pertemuan 4</title>
    <style>
        body{font-family:Arial,sans-serif;max-width:850px;margin:40px auto;padding:0 18px;background:#f4f6f8;color:#222}
        header,.item{background:white;padding:20px;border-radius:12px;margin-bottom:14px;box-shadow:0 2px 8px #0000000d}
        h1{margin-top:0;color:#183b56}.item a{color:#075985;text-decoration:none;font-weight:bold}
        .meta{color:#555;line-height:1.7}
    </style>
</head>
<body>
<header>
    <h1>Praktikum PBO — Pertemuan 4</h1>
    <p><strong>Constructor, Destructor, dan Overloading pada PHP</strong></p>
    <div class="meta">Nama: Rafy Adilaputra<br>NIM: 2530521060<br>Kelas: 3 TI C</div>
</header>
<?php foreach ($percobaan as $file => $judul): ?>
    <section class="item"><a href="<?= htmlspecialchars($file, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($judul, ENT_QUOTES, 'UTF-8') ?></a></section>
<?php endforeach; ?>
</body>
</html>
