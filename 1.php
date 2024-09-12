<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>karakter</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">isi</label>
        <input type="text" required name="isi">
        <button type="submit">Kirim</button>
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Mengambil nilai dari input dengan name "isi"
    $teks = $_POST['isi'];

    // Mencocokkan semua karakter yang bukan huruf (a-z, A-Z) dan spasi
    preg_match_all('/[^a-zA-Z\s]/' , $teks , $matches);

    // Mengecek apakah ada karakter yang cocok dengan pola regex
    if (count($matches[0]) > 0){
        // Menghapus duplikat dari hasil pencocokan dan menyimpannya dalam array $uniqueSymbols
        $uniqueSymbols = array_unique($matches[0]);

        // menampilkan hasil, dipisahkan dengan koma
        echo "Kalimat ini terdapat simbol: " . implode(',' , $uniqueSymbols);
    } else {
        echo "Tidak Terdapat Symbol Pada Kalimat";
    }
}
?>
