<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="angka" id="" required>
        <button type="submit">ok</button>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $angka = $_POST['angka'];

        function kata($isi){
            for($i = 1; $i <= $isi; $i++){
                if($i % 3 == 0 && $i % 5 == 0){
                    echo "FizzBuzz" . "<br/>";
                }elseif($i % 3 == 0){
                    echo "Fizz" . "<br/>";
                }elseif($i % 5 == 0 ){
                    echo "Buzz" . "<br/>";
                }else{
                    echo $i . "<br/>";
                }
            }
        }
        kata($angka);
    }
    ?>
</body>
</html>
