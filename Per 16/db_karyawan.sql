-- Membuat database db_karyawan
CREATE DATABASE IF NOT EXISTS db_karyawan;
USE db_karyawan;

-- Membuat tabel contoh untuk simulasi query (misal: tabel karyawan)
CREATE TABLE IF NOT EXISTS karyawan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    posisi VARCHAR(50) NOT NULL
);

-- Pengisian data awal untuk simulasi data fetch
INSERT INTO karyawan (nama, posisi) VALUES 
('Ahmad', 'Administrator'),
('Budi', 'Developer');