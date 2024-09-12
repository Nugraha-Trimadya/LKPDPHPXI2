<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Total Karakter</title>
</head>
<body>
    <form action="" method="POST">
        <h1>Hitung Total Karakter Dalam String</h1>
        <label for="name">Masukkan String :</label>
        <input type="text" id="isi" name="isi" required>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama = $_POST["isi"];
        $buat = str_replace(' ','',$nama);
        $totalKarakter = strlen($buat);
        echo "Total karakter : $totalKarakter";

    }