<?php
function checkJawaban($nama, ...$arjawaban) {
    // Daftar jawaban benar untuk setiap pertanyaan
    $jawaban = ['A', 'B', 'C', 'D', 'E', 'E', 'C', 'B', 'A', 'A'];
    $arbenar = []; // Array untuk menyimpan hasil jawaban user

    // Cek setiap jawaban user
    foreach ($jawaban as $key => $value) {
        if (isset($arjawaban[$key]) && $arjawaban[$key] == $value) {
            $arbenar[$key] = 1; // Jawaban benar
        } else {
            $arbenar[$key] = 0; // Jawaban salah
        }
    }

    // Tampilkan hasil
    echo "Nama: $nama <br>";
    echo "Jawaban Benar: " . count(array_keys($arbenar, 1)) . "<br>";
    echo "Jawaban Salah: " . count(array_keys($arbenar, 0));
}

checkJawaban('Andi', 'A', 'B', 'C', 'D', 'E', 'B', 'B', 'B', 'B', 'A');
