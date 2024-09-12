<?php
$array1 = [80, 77, 65, 89, 55, 12, 90, 86];
$array2 = [77, 99, 55, 81, 45, 90, 98];

// Menggabungkan kedua array
$dua_array = array_merge($array1, $array2);

// Menghapus elemen duplikat dari array yang telah digabungkan
$unique_array = array_unique($dua_array);

// Mengurutkan array gabungan
sort($dua_array);

// Menampilkan elemen dari array gabungan yang telah diurutkan
foreach ($dua_array as $value) {
    echo $value . ",";
}
?>
