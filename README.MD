**Readme penjelasan setiap bagian kriteria penilaian berdasarkan Soal UAS pengweb 2023**

Link Website: https://121140020inori.000webhostapp.com/
Website yang digunakan untuk hosting: 000Webhost
Username: id21685501_121140020_uas_pemweb
Password: 121140020_Uas
Database name: id21685501_maganghumas

Bagian 1: Client-side Programming 
1.1 Buatlah sebuah halaman web sederhana yang memanfaatkan JavaScript untuk melakukan manipulasi DOM.
:: perintah di atas meminta mahasiswa  untuk membuat halaman web sederhana menggunakan JavaScript untuk mengubah struktur atau konten dari dokumen HTML atau XML untuk melakukan manipulasi DOM (Document Object Model). Manipulasi yang dilakukan adalah CRUD dengan isi kolom (Nama, NIM, Prodi, Angkatan, Posisi, Gender, Nomor WA, dan Email). dan semua data ini ditampilkan dari server ke dalam suatu halaman menggunakan tag 'table'.


1.2 Buatlah beberapa event untuk menghandle interaksi pada halaman web
:: Dengan menggunakan event kita dapat membuat halaman web lebih interaktif dan responsif, salah satu contohnya adalah Hover event.

Bagian 2: Server-side Programming 
2.1 Implementasikan script PHP untuk mengelola data dari formulir pada Bagian 1 menggunakan variabel global seperti `$_POST` atau `$_GET`. Tampilkan hasil pengolahan data ke layar.
:: Aplikasikan variabel '$_POST' dan '$_GET' pada data formulir yaitu file create, index, connection, update, delete.

2.2 Buatlah sebuah objek PHP berbasis OOP yang memiliki minimal dua metode dan gunakan objek tersebut dalam skenario tertentu pada halaman web Anda.
:: Membuat sebuah objek PHP berbasis OOP yang memiliki minimal dua metode. Objek tersebut kemudian digunakan dalam skenario tertentu pada halaman web.

Bagian 3: Database Management
3.1 Buatlah sebuah tabel pada database MySQL
:: Membuat database Magang melalui MySQL, lampiran sebagai berikut.
    CREATE TABLE magang (
        nama VARCHAR(255) NOT NULL,
        nim VARCHAR(255) NOT NULL PRIMARY KEY,
        prodi VARCHAR(255) NOT NULL,
        angkatan INT(255) NOT NULL,
        posisi VARCHAR(255) NOT NULL,
        gender VARCHAR(255) NOT NULL,
        nomorWA VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL
    );


    INSERT INTO magang (nama, nim, prodi, angkatan, posisi, gender, nomorWA, email) VALUES
    ("Andi", "12345679", "Teknik Informatika", 2021, "Videographer", "Laki-laki", 081234567891, "andi123@gmail.com"),
    ("Budi", "12345680", "Teknik Elektro", 2020, "Design", "Laki-laki", 081234567892, "budi680@gmail.com"),
    ("Cici", "12345681", "Akuntansi", 2022, "Content Creator", "Perempuan", 081234567893, "cici681@gmail.com"),
    ("Hosea", "12346783", "Farmasi",  2020, "Host&Reporter", "Laki-laki", 081234562453, "hosea783@gmail.com"),
    ("Obaja", "12567834", "Teknik Mesin", 2021, "Editor", "Laki-laki", 089834568733, "obaja834@gmail.com");



3.2 Buatlah konfigurasi koneksi ke database MySQL pada file PHP. Pastikan koneksi berhasil dan dapat diakses.
:: Melakukan konfigurasi koneksi database dari MySQL dngan file connection.php.

3.3 Lakukan manipulasi data pada tabel database dengan menggunakan query SQL. Misalnya, tambah data, ambil data, atau update data.
:: Dalam hal ini, data dapat diedit, dihapus, dan ditambah.

Bagian 4: State Management
4.1 Buatlah skrip PHP yang menggunakan session untuk menyimpan dan mengelola state pengguna. Implementasikan logika yang memanfaatkan session.
:: Menggunakan session, skrip PHP user disimpan dan dikelola (seperti nama, email, nim, dll).

4.2 Implementasikan pengelolaan state menggunakan cookie dan browser storage pada sisi client menggunakan JavaScript.
:: Menerapkan pengelolaan state menggunakan cookie dan browser storage pada sisi user dengan menggunakan JavaScript.

**Bagian Bonus**

Bagian Bonus: Hosting Aplikasi Web 

- Apa langkah-langkah yang Anda lakukan untuk meng-host aplikasi web Anda?
:: Pertama, cari dan siapkan penyedia hosting web yang sesuai, lalu jika diharuskan untuk mendaftarkan akun, buat akun dan siapkan databese serta code lainnya untuk dikoneksikan secara aman.

- Pilih penyedia hosting web yang menurut Anda paling cocok untuk aplikasi web Anda. Berikan alasan Anda.
:: Hal ini dikarenakan sangat penting untuk memastikan web yang kita buat dapat berjalan dengan lancar dan juga aman. 

- Bagaimana Anda memastikan keamanan aplikasi web yang Anda host?
:: Keamanan aplikasi web dapat dipastikan dnegan melihat apakah menggunakan protokol HTTPS atau tidak, karena dengan HTTPS data yang dikirim antara browser dengan server akan dienkripsi dan adanya perlindungan bagi data yang sesnsitif. Selain itu, oenyedia pernagkat lunak yang mengeluarkan pembaruan utnuk memperbaiki kerentanan keamanan juga menjadi salah satu yang perlu dipastikan.

- Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda.
:: Konfigurasi server yang saya lakukan untuk mendukung aplikasi web saya dalah dilakukan dengan menyiapakan database server  MySQL dan source code lainnya (PHP, Java, HTML, CSS). 
