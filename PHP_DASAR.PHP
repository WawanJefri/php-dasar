<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pribadi</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<?php
// Definisikan variabel data pribadi
$nama = "Wawan Jefriansyah";
$jenis_kelamin = "Laki-Laki";
$umur = 20;
$berat = "54kg";
$tinggi = "170 cm";
?>

<h2 style="text-align: center;">Data Pribadi</h2>
<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $nama; ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $jenis_kelamin; ?></td>
    </tr>
    <tr>
        <td>Umur</td>
        <td>:</td>
        <td><?php echo $umur; ?></td>
    </tr>
    <tr>
        <td>Berat</td>
        <td>:</td>
        <td><?php echo $berat; ?></td>
    </tr>
    <tr>
        <td>Tinggi</td>
        <td>:</td>
        <td><?php echo $tinggi; ?></td>
    </tr>
</table>

</body>
</html>
