<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="POST">
            <input type="number" name="fulus" required>

            <select name="opsi" id="">
                <option value="senin">Senin</option>
                <option value="selasa">Selasa</option>
                <option value="rabu">Rabu</option>
                <option value="kamis">Kamis</option>
                <option value="jumat">Jumat</option>
                <option value="sabtu">Sabtu</option>
                <option value="minggu">Minggu</option>
            </select>
            <button type="submit" value="fu">Kirim</button>
        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $pembelian = $_POST['fulus']; // Jumlah uang pembelian dari input
        $day = $_POST['opsi']; // Hari yang dipilih 
        $totalbayar = 0; // Inisialisasi variabel untuk menyimpan total bayar

        if ($pembelian > 100000) {
            // Jika hari yang dipilih adalah selasa
            if ($day == "selasa") {
                // Menghitung diskon 7% dari pembelian
                $totalbayar = $pembelian - ($pembelian * 7 / 100);
                // Menghitung diskon tambahan 5% dari sisa setelah diskon pertama
                $totalbayar -= $totalbayar * 5 / 100;
            } else {
                // Jika bukan selasa, hanya diskon 5%
                $totalbayar = $pembelian - ($pembelian * 5 / 100);
            }
        } else {
            // Jika pembelian 100.000 atau kurang, tidak ada diskon
            $totalbayar = $pembelian;
        }

        echo "Hari ini hari: <br>" . $day . "<br>";
        echo "Total pembelanjaan: <br>" . number_format($pembelian, 0, '.', '.') . "<br>";
        echo "Total pembayaran setelah diskon: <br>" . number_format($totalbayar, 0, '.', '.') . "<br>";
    }
    ?>
</body>
</html>
