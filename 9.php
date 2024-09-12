<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pecahan Uang</title>
</head>
<body>
    <h2>Masukkan Jumlah Uang</h2>
    <form action="" method="POST">
        <label for="uang">Jumlah Uang:</label>
        <input type="number" id="uang" name="uang" required>
        <button type="submit">Hitung Pecahan</button>
    </form>

    <?php
    // Fungsi untuk menghitung pecahan uang
    function hitungPecahan($uang) {
        $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 100, 10]; // Array pecahan uang
        $arr = []; // Array untuk menyimpan hasil pecahan

        // Loop melalui setiap pecahan dan hitung jumlahnya
        foreach ($pecahan as $nilai) {
            if ($uang >= $nilai) {
                $jumlah = intdiv($uang, $nilai); // Hitung berapa kali pecahan ini ada
                $uang %= $nilai; // Hitung sisa uang setelah diambil pecahan ini
                $arr[] = "Rp. " . number_format($nilai, 0, '.', '.') . " : " . $jumlah;
            }
        }

        // Menampilkan hasil pecahan
        echo "Jenis pecahan untuk uang Rp. " . number_format($_POST['uang'], 0, '.', '.') . " : <br>";
        echo "<ul>";
        foreach ($arr as $value) {
            echo "<li>$value</li>";
        }
        echo "</ul>";
    }

    // Cek jika form telah disubmit dengan metode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $duit = $_POST['uang'];
        if ($duit > 0) {
            hitungPecahan($duit); 
        } else {
            echo "Masukkan jumlah uang yang valid!";
        }
    }
    ?>
</body>
</html>
