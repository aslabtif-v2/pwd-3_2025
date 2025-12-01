<?php
require_once "Kue.php";

$kue = new Kue();
$data = $kue->tampilkanSemua();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Kue Lebaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Daftar Kue Lebaran</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama Kue</th>
            <th>Jenis</th>
            <th>Harga (Rp)</th>
            <th>Stok</th>
        </tr>

        <?php foreach ($data as $row): ?>
        <tr>
            <td><?= $row["id"]; ?></td>
            <td><?= $row["nama_kue"]; ?></td>
            <td><?= $row["jenis"]; ?></td>
            <td><?= number_format($row["harga"], 0, ',', '.'); ?></td>
            <td><?= $row["stok"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

</body>
</html>