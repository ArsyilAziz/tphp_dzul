<!-- login -->
<?php
// Data yang user input
$username = "dzul";
$password = "12345";

// Data user yang tersimpan
$user_benar = "dzul";
$pass_benar = "12345";

// Proses pengecekan login user
if ($username != "") { // apakah user mengisi username?
    if ($password != "") { // apakah user mengisi password?
        if ($username == $user_benar && $password == $pass_benar) {
            echo "Login berhasil! Selamat datang, $username.";  // jika username dan password cocok
        } else {
            echo "Username atau password salah."; // jika username atau password salah
        }
    } else {
        echo "Password belum diisi."; // jika password kosong
    }
} else {
    echo "Username belum diisi.";  // jika username kosong
}
?>

<!-- 
Nested if = if di dalam if
Fungsinya: Memastikan kondisi satu per satu sebelum lanjut ke proses selanjutnya
Logikanya: Cek step-by-step (berjenjang)
-->