<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <form action="" method="POST">
            <label for="bilangan">Masukkan bilangan:</label>
            <input type="number" id="bilangan" name="bilangan" required>
            <button type="submit">Cek</button>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan = $_POST['bilangan'];

        // Menampilkan judul hasil
        echo "<h2>Yang bisa membagi $bilangan</h2>";
        echo "<ul>";

        // Loop dari 1 sampai 30
        for ($i = 1; $i <= 30; $i++) {
            // Memeriksa apakah bilangan dapat dibagi oleh $i tanpa sisa
            if ($bilangan % $i == 0) {
                // Menghitung hasil bagi
                $hasilak = $bilangan / $i;
                echo "<li>$bilangan : $i = $hasilak</li>";
            }
        }
    }
    ?>
</body>
</html>
