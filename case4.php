<?php
$angka = isset($_POST['angka']) ? $_POST['angka'] : null;
$hasil = '';

function isPrima($n){
    if ($n <= 1) return false;
    for ($i = 2; $i <= sqrt($n); $i++){
        if ($n % $i == 0) return false;
    }
    return true;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(is_numeric($angka)){
        if ($angka == 0) {
            $hasil = 'Angka 0 bukan bilangan prima dan bukan kelipatan 3.';
        } else {
            $hasil = "Angka $angka ";
            if (isPrima($angka)) {
                $hasil .= 'adalah bilangan prima.';
            } else {
                $hasil .= 'bukan bilangan prima.';
            }

            if ($angka % 3 == 0) {
                $hasil .= ' Juga merupakan kelipatan 3.';
            }
        }
    } else {
        $hasil = 'Masukkan angka yang valid!';
    }
    echo $hasil;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bilangan prima</title>
</head>
<body>
    <form action="" method="POST">
        <label for="angka">Masukkan angka:</label>
        <input type="text" id="angka" name="angka" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
