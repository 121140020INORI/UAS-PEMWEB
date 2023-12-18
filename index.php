<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Magang</title>
    <link rel="stylesheet" href="CSS/index.css">
</head>
<body>

<?php
include 'connection.php';

// Query untuk membaca data dari tabel magang
$query = "SELECT * FROM magang";
$result = $koneksi->query($query);

// Mengecek apakah query berhasil dijalankan
if ($result) {
    // Menampilkan data dalam bentuk tabel
    echo "<h2>Data Peserta Magang Humas ITERA</h2>";
    echo "<table border='1'>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>Angkatan</th>
                <th>Posisi</th>
                <th>Gender</th>
                <th>Nomor WA</th>
                <th>Email</th>
                <th>Action</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['nama'] . "</td>
                <td>" . $row['nim'] . "</td>
                <td>" . $row['prodi'] . "</td>
                <td>" . $row['angkatan'] . "</td>
                <td>" . $row['posisi'] . "</td>
                <td>" . $row['gender'] . "</td>
                <td>" . $row['nomorWA'] . "</td>
                <td>" . $row['email'] . "</td>
                <td class='action-column'>
                        <a class='btn btn-primary' href='update.php?nim=" . $row["nim"] . "'>Edit</a>
                        <a class='btn btn-danger' href='delete.php?nim=" . $row["nim"] . "' onclick='return confirm(\"Anda yakin ingin menghapus data ini?\");'>Delete</a>
                    </td>
            </tr>";
    }

    echo "</table>";

    // Membebaskan hasil query
    $result->free();
} else {
    echo "Error: " . $koneksi->error;
}

echo"<a class='add-button' href='create.php'>Tambah data baru</a>";


// Menutup koneksi database
$koneksi->close();
?>

</body>
</html>
