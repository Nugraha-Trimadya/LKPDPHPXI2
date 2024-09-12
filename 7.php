<?php

// Fungsi untuk membungkus teks jika lebih dari 50 karakter
function wrapText($text) {
    // Mengubah teks menjadi array karakter
    $count = str_split($text);

    // Cek apakah panjang teks lebih dari 50 karakter
    if (count($count) > 50) {
        // Ambil 50 karakter pertama dari teks
        $text = substr($text, 0 , 50);
        // Tambahkan elipsis ("...") di akhir teks
        $text .= "...";
    }

    // Tampilkan teks
    echo $text;
}

// Teks panjang yang akan diproses
$kata = "Lorem ipsum dolor sit memet, consectetur adipiscing elit. Nulla vel auctor turpis. Donec vel erat sollicitudin, accumsan lectus eget, blandit orci. Integer ut erat ipsum. Sed porta at erat vitae ornare. Aenean auctor, lacus ac condimentum ultricies, mi enim lobortis nibh, sit amet laoreet arcu felis nec quam. Cras euismod ex magna, in scelerisque urna laoreet quis. Aliquam tincidunt lacus sed tempor dapibus. Morbi sit amet dolor hendrerit, sollicitudin purus non, blandit sem.";

// Tampilkan teks awal
echo "<b>Kalimat awal : </b> " . $kata . "</br>";

// Panggil fungsi untuk membungkus teks
wrapText($kata);
?>
