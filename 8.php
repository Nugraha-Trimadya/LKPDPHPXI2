<?php
// Array yang berisi nama-nama jurusan
$array1 = ["PPLG", "pplg", "HTL", "htl", "KLN", "kln" , "DKV", "dkv"];

// Menggunakan array_filter untuk menyaring elemen yang hanya terdiri dari huruf kapital
$kalimat_array = array_filter($array1, function($value) {
    return ctype_upper($value); // Mengecek apakah string hanya berisi huruf kapital
});

// Menghapus elemen duplikat dari array yang telah disaring
$unique_array = array_unique($kalimat_array);

// Mengurutkan array secara ascending berdasarkan kunci (indeks) array
ksort($unique_array);

// Menampilkan setiap elemen dari array yang telah diproses, dipisahkan dengan koma dan baris baru
foreach ($unique_array as $value) {
    echo ($value) . "," . "\n";
}
?>
