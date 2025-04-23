<!-- diskon belanja -->
<?php
    // Total belanja pelanggan
    $total = 120;

    // Menggunakan ternary untuk menentukan apakah pelanggan dapat diskon atau tidak
    $diskon = ($total >= 100) ? "Selamat! Anda mendapatkan diskon 10%." : "Belanja minimal 100 ribu untuk mendapatkan diskon.";

    // menampilkan struk belanja ke pelanggan
    echo "Total Belanja: " . $total . " ribu";// Menampilkan total belanja
    echo "<br>";
    echo $diskon;// Menampilkan diskon  
?>

<!-- 
Ternary operator adalah bentuk pendek dari if-else statement.
Syntax umumnya:
(kondisi) ? nilai_jika_benar : nilai_jika_salah; 
-->
    <!-- perbandingan Sintaks :
    Ternary Operator = ($kondisi) ? nilai_jika_benar : nilai_jika_salah; 
    One-line If-Elseif = (kondisi) echo "Benar"; else echo "Salah"; -->