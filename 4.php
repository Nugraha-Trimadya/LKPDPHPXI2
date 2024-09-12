<?php
for ($i = 1; $i < 10; $i++) {
    for ($j = 0; $j < 8; $j++) {
        // Jika $i adalah kelipatan dari 5, tidak mencetak bintang
        if ($i % 5 == 0) {
            echo ""; // Tidak mencetak apapun
        } else {
            echo "*"; // Mencetak bintang
        }
    }
    echo "<br>"; // Pindah ke baris berikutnya setelah mencetak 8 karakter
}
?>
