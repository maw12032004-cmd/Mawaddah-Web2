================================================================================
        SISTEM PENDAFTARAN MAHASISWA BARU UNIVERSITAS PAMULANG
================================================================================

DESKRIPSI PROGRAM:
Aplikasi web untuk proses input dan pendaftaran mahasiswa baru dengan fitur
validasi, perhitungan rata-rata nilai, dan penentuan status penerimaan.

================================================================================
FITUR UTAMA:
================================================================================

1. FORM INPUT PENDAFTARAN
   - Kode Pendaftaran (dengan format validasi)
   - Nama Pendaftar
   - Jenis Kelamin (Laki-laki / Perempuan)
   - Tempat dan Tanggal Lahir
   - Asal Sekolah
   - Tahun Lulus
   - Perkiraan Penghasilan Orang Tua
   - Nilai Tes (Matematika, Bahasa Inggris, Pengetahuan Umum)

2. VALIDASI DATA
   - Format Kode Pendaftaran otomatis
   - Validasi range nilai (0-100)
   - Validasi tahun lulus (2015-2026)
   - Notifikasi error yang user-friendly

3. TABEL DATA
   - Menampilkan semua data pendaftar
   - Kolom: No, Kode, Nama, JK, TTL, Sekolah, Nilai, Rata-rata, Keterangan
   - Fitur hapus data dengan konfirmasi
   - Warna keterangan berdasarkan status

4. PERHITUNGAN OTOMATIS
   - Rata-rata nilai: (MAT + B.INGGRIS + B.UMUM) / 3
   - Penentuan keterangan:
     * Lulus: Rata-rata >= 70
     * Cadangan: Rata-rata 60-69
     * Tidak Lulus: Rata-rata < 60

5. PENYIMPANAN DATA
   - Menggunakan Local Storage Browser
   - Data tetap tersimpan meski browser ditutup

================================================================================
FORMAT KODE PENDAFTARAN:
================================================================================

Format: [A/B/V][1-9]-XXX-[1-9]

Contoh: A2-101-9

Penjelasan:
- Karakter 1: Tempat Tes
  * A = Gedung A
  * B = Gedung B
  * V = Viktor

- Karakter 2: Gelombang (1-9)

- Karakter 3-5: Nomor Urut Pendaftar (000-999)

- Karakter 6: Bulan Tes (1-9)
  * 1 = Januari
  * 2 = Februari
  * dst...

================================================================================
CARA PENGGUNAAN:
================================================================================

1. Buka file index.html di browser web Anda

2. Isi semua field form pendaftaran dengan data lengkap

3. Nilai tes harus diisi dengan angka 0-100

4. Klik tombol "SIMPAN" untuk menyimpan data

5. Data akan langsung ditampilkan di tabel

6. Untuk menghapus data, klik tombol "Hapus" pada baris yang ingin dihapus

7. Klik tombol "RESET" untuk menghapus semua field form

================================================================================
SPESIFIKASI TEKNIS:
================================================================================

File yang disertakan:
- index.html    : Struktur halaman web
- style.css     : Styling dan desain
- script.js     : Logika dan fungsionalitas aplikasi

Browser yang didukung:
- Chrome 60+
- Firefox 55+
- Safari 11+
- Edge 15+

Teknologi yang digunakan:
- HTML5
- CSS3 (Grid, Flexbox, Gradients)
- JavaScript ES6+
- Local Storage API

================================================================================
FITUR VISUAL:
================================================================================

1. DESAIN RESPONSIF
   - Menyesuaikan dengan ukuran layar desktop, tablet, dan mobile

2. GRADIEN MODERN
   - Warna purple-blue gradient untuk header dan info boxes

3. INTERAKTIF
   - Hover effects pada elemen
   - Validasi real-time
   - Notifikasi animasi

4. KODE WARNA
   - Hijau (Lulus): Rata-rata >= 70
   - Kuning (Cadangan): Rata-rata 60-69
   - Merah (Tidak Lulus): Rata-rata < 60

================================================================================
CATATAN PENTING:
================================================================================

1. Data disimpan di Local Storage browser, bukan di database
   - Data hilang jika cache browser dihapus
   - Data hanya tersimpan di satu browser

2. Semua field form wajib diisi sebelum submit

3. Validasi format kode pendaftaran sangat ketat sesuai ketentuan

4. Program tidak memerlukan koneksi internet untuk berjalan

5. Untuk backup data, export data dari browser dev tools atau screenshoot tabel

================================================================================
PENGEMBANG:
================================================================================

Program dibuat sesuai dengan spesifikasi UTS Semester Genap Tahun Akademik 2025/2026
Mata Kuliah: Pemrograman Web II / 33
Fakultas: Ilmu Komputer
Program Studi: Teknik Informatika S-1
Universitas Pamulang

================================================================================
TROUBLESHOOTING:
================================================================================

1. Data tidak tersimpan
   - Pastikan Local Storage tidak dinonaktifkan di browser
   - Coba gunakan private/incognito window

2. Tampilan tidak sempurna
   - Refresh browser (F5 atau Ctrl+R)
   - Clear cache browser
   - Gunakan browser yang terbaru

3. Validasi kode pendaftaran gagal
   - Pastikan format: [A/B/V][1-9]-XXX-[1-9]
   - Contoh benar: A2-101-9, B5-234-3, V1-001-8

================================================================================

Semoga program ini bermanfaat dan memenuhi semua persyaratan UTS.
Terima kasih telah menggunakan Sistem Pendaftaran Mahasiswa Baru ini.

================================================================================
