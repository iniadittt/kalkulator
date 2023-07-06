<?php

    // Fungsi untuk operasi penjumlahan
    function penjumlahan($bilangan1, $bilangan2) {
        $result = $bilangan1 + $bilangan2;
        return $result;
    }

    // Fungsi untuk operasi pengurangan
    function pengurangan($bilangan1, $bilangan2) {
        $result = $bilangan1 - $bilangan2;
        return $result;
    }

    // Fungsi untuk operasi perkalian
    function perkalian($bilangan1, $bilangan2) {
        $result = $bilangan1 * $bilangan2;
        return $result;
    }

    // Fungsi untuk operasi pembagian
    function pembagian($bilangan1, $bilangan2) {
        $result = $bilangan1 / $bilangan2;
        return $result;
    }

    if(isset($_POST['submit'])){ // Apabila button Hitung ditekan
        $bilangan1 = $_POST['bilangan1']; // Mengambil bilangan 1
        $bilangan2 = $_POST['bilangan2']; // Mengambil bilangan 2
        $jumlah = penjumlahan($bilangan1, $bilangan2); // Operasi penjumlahan dari fungsi penjumlahan
        $kurang = pengurangan($bilangan1, $bilangan2); // Operasi pengurangan dari fungsi pengurangan
        $kali = perkalian($bilangan1, $bilangan2); // Operasi perkalian dari fungsi perkalian
        $bagi = pembagian($bilangan1, $bilangan2); // Operasi pembagian dari fungsi pembagian
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class='text-center py-3'>
        <img src="./images/kalkulator.jpeg" alt="Kalkulator" width='200px'>
    </div>
    <h1 class="text-center">Aplikasi Kalkulator</h1>
    <div class="container px-5">
        <form method="POST">
            <div class="mb-3">
                <label for="bilangan1" class="form-label">Bilangan 1</label>
                <input type="number" class="form-control" id="bilangan1" name="bilangan1">
            </div>
            <div class="mb-3">
                <label for="bilangan2" class="form-label">Bilangan 2</label>
                <input type="number" class="form-control" id="bilangan2" name="bilangan2">
            </div>
            <input type="submit" class="btn btn-primary" value="Hitung" name="submit">
        </form>
        <div>
            <?php
                if(!empty($_POST['submit'])){ // Jika button hitung sudah ditekan maka tampilkan
                    echo "<div class='py-5'>";
                    echo "<p>Hasil penjumlahan adalah : $jumlah</p>";
                    echo "<p>Hasil pengurangan adalah : $kurang</p>";
                    echo "<p>Hasil perkalian adalah : $kali</p>";
                    echo "<p>Hasil pembagian adalah : $bagi</p>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>