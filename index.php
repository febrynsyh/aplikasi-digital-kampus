
<?php
$judul = "Aplikasi Digital Kampus";
$deskripsi = "Simulasi Kolaborasi GitHub dan DevOps";

$menu = [
    "Dashboard",
    "Data Mahasiswa",
    "Data Dosen",
    "Data Mata Kuliah"
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul; ?></title>
</head>
<body>
    <h1><?php echo $judul; ?></h1>
    <p><?php echo $deskripsi; ?></p>

    <h2>Dashboard</h2>
    <p>Selamat datang di Aplikasi Digital Kampus.</p>

    <h3>Menu Aplikasi</h3>
    <ul>
        <?php foreach ($menu as $item): ?>
            <li><?php echo $item; ?></li>
        <?php endforeach; ?>
    </ul>

    <p>UTS Cloud Computing - Pengembangan Fitur Dashboard.</p>
</body>
</html>
