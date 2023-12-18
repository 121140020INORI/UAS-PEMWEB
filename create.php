<?php
session_start(); // Memulai sesi
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Peserta Magang</title>
    <link rel="stylesheet" href="CSS/create.css">
    <script src="handle.js"></script>
</head>
<body>

<?php

include 'connection.php';

// Fungsi untuk menetapkan cookie
function setCookieValue($name, $value, $days = 1) {
    setcookie($name, $value, time() + ($days * 24 * 60 * 60), "/");
}

// Fungsi untuk mendapatkan nilai cookie
function getCookieValue($name) {
    return isset($_COOKIE[$name]) ? $_COOKIE[$name] : null;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Contoh data untuk dimasukkan ke dalam tabel magang
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $angkatan = $_POST['angkatan'];
    $posisi = $_POST['posisi'];
    $gender = $_POST['gender'];
    $nomorWA = $_POST['nomorWA'];
    $email = $_POST['email'];

    $query = "SELECT * FROM magang WHERE nim='$nim'";
    $checkDuplicate = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($checkDuplicate) > 0) {
        $_SESSION['message'] = "Data sudah ada!";
    } else {
        $query = "INSERT INTO magang (nama, nim, prodi, angkatan, posisi, gender, nomorWA, email) VALUES ('$nama', '$nim', '$prodi', $angkatan, '$posisi', '$gender', '$nomorWA', '$email')";

        if (mysqli_query($koneksi, $query)) {
            $_SESSION['message'] = "Data Berhasil Ditambah!";
        } else {
            $_SESSION['message'] = "Error: " . mysqli_error($koneksi);
        }
    }
    echo '<script> window.location.href = "index.php"; </script>'; // Redirect ke halaman index
    
}
?>

<h2>Form Input Peserta Magang</h2>
<form method="post">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required><br>

    <label for="nim">NIM:</label>
    <input type="text" name="nim" required><br>

    <label for="prodi">Program Studi:</label>
    <input type="text" name="prodi" required><br>

    <label for="angkatan">Angkatan:</label>
    <input type="number" name="angkatan" required><br>

    <label for="posisi">Posisi Magang:</label>
    <input type="text" name="posisi" required><br>

    <label for="gender">Gender:</label>
    <select name="gender" required>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br>

    <label for="nomorWA">Nomor WhatsApp:</label>
    <input type="text" name="nomorWA" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <input type="submit" value="Submit">
</form>

<script src="JS.js"></script>


</body>
</html>
