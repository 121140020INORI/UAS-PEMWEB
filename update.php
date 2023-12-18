<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Magang</title>
    <link rel="stylesheet" href="CSS/update.css">
</head>
<body>

<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    $nimToUpdate = $_POST['nimToUpdate'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $angkatan = $_POST['angkatan'];
    $posisi = $_POST['posisi'];
    $gender = $_POST['gender'];
    $nomorWA = $_POST['nomorWA'];
    $email = $_POST['email'];

    // Query untuk memperbarui data di tabel magang
    $query = "UPDATE magang SET 
                nama = '$nama',
                nim = '$nim',
                prodi = '$prodi',
                angkatan = $angkatan,
                posisi = '$posisi',
                gender = '$gender',
                nomorWA = '$nomorWA',
                email = '$email'
              WHERE nim = '$nimToUpdate'";

    // Mengecek apakah query berhasil dijalankan
    if ($koneksi->query($query) === TRUE) {
        echo '<script>alert("Data berhasil diperbarui.");
        window.location.href = "index.php";
        </script>';
    } else {
        echo'<script>alert("Error.")</script>' . $koneksi->error;
        
    }
}

// Jika nim disertakan dalam parameter GET, ambil data dari database untuk ditampilkan pada formulir
if (isset($_GET['nim'])) {
    $nimToUpdate = $_GET['nim'];

    // Query untuk mendapatkan data berdasarkan nim
    $query = "SELECT * FROM magang WHERE nim = '$nimToUpdate'";
    $result = $koneksi->query($query);

    // Mengecek apakah query berhasil dijalankan
    if ($result) {
        // Mengambil data satu per satu
        $row = $result->fetch_assoc();

        // Menampilkan formulir dengan data yang sudah ada
        ?>
        <h2>Form Update Data Magang</h2>
        <form method="post" action="">
            <input type="hidden" name="nimToUpdate" value="<?php echo $nimToUpdate; ?>">
            
            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br>

            <label for="nim">NIM:</label>
            <input type="text" name="nim" value="<?php echo $row['nim']; ?>" required><br>

            <label for="prodi">Program Studi:</label>
            <input type="text" name="prodi" value="<?php echo $row['prodi']; ?>" required><br>

            <label for="angkatan">Angkatan:</label>
            <input type="number" name="angkatan" value="<?php echo $row['angkatan']; ?>" required><br>

            <label for="posisi">Posisi Magang:</label>
            <input type="text" name="posisi" value="<?php echo $row['posisi']; ?>" required><br>

            <label for="gender">Gender:</label>
            <select name="gender" required>
                <option value="Laki-laki" <?php echo ($row['gender'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                <option value="Perempuan" <?php echo ($row['gender'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
            </select><br>

            <label for="nomorWA">Nomor WhatsApp:</label>
            <input type="text" name="nomorWA" value="<?php echo $row['nomorWA']; ?>" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>

            <input type="submit" value="Update">
        </form>
        <?php

        // Membebaskan hasil query
        $result->free();
    } else {
        echo "Error: " . $koneksi->error;
    }
}

// Menutup koneksi database
$koneksi->close();
?>

</body>
</html>
