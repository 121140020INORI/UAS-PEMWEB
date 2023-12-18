-- Active: 1683011692942@@127.0.0.1@3306@maganghumas


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

