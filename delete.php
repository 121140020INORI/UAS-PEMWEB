<?php
include 'connection.php';

// Cek apakah parameter NIM disertakan dalam URL
if (isset($_GET['nim'])) {
    $nimToDelete = $_GET['nim'];

    // Query untuk menghapus data dari tabel magang
    $query = "DELETE FROM magang WHERE nim = '$nimToDelete'";

    // Mengecek apakah query berhasil dijalankan
    if ($koneksi->query($query) === TRUE) {
        echo '<script>alert("Data berhasil dihapus.");
        window.location.href = "index.php";
        </script>';
    } else {
        echo'<script>alert("Error.")</script>' . $koneksi->error;
    }
} else {
    echo'<script>NIM tidak ditemukan</script>';
}

// Menutup koneksi database
$koneksi->close();
?>
