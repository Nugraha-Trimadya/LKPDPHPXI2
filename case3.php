<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <form action="" method="POST">
        <label for="angka1">Angka 1</label>
        <input type="text" id="angka1" name="angka1" required><br><br>

        <label for="angka2">Angka 2</label>
        <input type="text" id="angka2" name="angka2" required><br><br>

        <label for="operation">Operasi</label>
        <select id="operation" name="operation">
            <option value="1">Tambah</option>
            <option value="2">Kurang</option>
            <option value="3">Kali</option>
            <option value="4">Bagi</option>
        </select><br><br>

        <button type="submit">Kirim</button>
    </form>

    <?php
    $hasil = '';
    $error = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka1 = $_POST["angka1"];
        $angka2 = $_POST["angka2"];
        $operation = $_POST["operation"];

        if (is_numeric($angka1) && is_numeric($angka2)) {
            switch ($operation) {
                case 1:
                    $hasil = $angka1 + $angka2;
                    break;
                case 2:
                    $hasil = $angka1 - $angka2;
                    break;
                case 3:
                    $hasil = $angka1 * $angka2;
                    break;
                case 4:
                    if ($angka2 != 0) {
                        $hasil = $angka1 / $angka2;
                    } else {
                        $error = "Tidak bisa membagi dengan nol!";
                    }
                    break;
                default:
                    $error = "Operasi tidak valid!";
                    break;
            }
        } else {
            $error = "Isi kedua angka dengan benar!";
        }

        if ($error) {
            echo "<p style='color: red;'>$error</p>";
        } else {
            echo "<p>Hasil: $hasil</p>";
        }
    }
    ?>
</body>
</html>
