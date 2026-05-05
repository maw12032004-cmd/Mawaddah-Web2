// Array untuk menyimpan data pendaftar
let dataPendaftar = [];
let nomorUrut = 1;

// Validasi format kode pendaftaran
function validateKodePendaftaran(kode) {
    // Format: [A/B/V][1-9]-XXX-[1-9]
    const regex = /^[ABV][1-9]-\d{3}-[1-9]$/;
    return regex.test(kode);
}

// Hitung rata-rata nilai
function hitungRataRata(mat, ing, umm) {
    return ((parseFloat(mat) + parseFloat(ing) + parseFloat(umm)) / 3).toFixed(2);
}

// Tentukan keterangan berdasarkan rata-rata
function tentukanKeterangan(rataRata) {
    const nilai = parseFloat(rataRata);
    if (nilai >= 70) {
        return 'Lulus';
    } else if (nilai >= 60 && nilai < 70) {
        return 'Cadangan';
    } else {
        return 'Tidak Lulus';
    }
}

// Format tanggal
function formatTanggal(tanggal) {
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    return new Date(tanggal + 'T00:00:00').toLocaleDateString('id-ID', options);
}

// Tambah data ke tabel
function tambahKeTable(data, index) {
    const tabel = document.querySelector('#tabelData tbody');
    
    // Hapus baris kosong jika ada
    const emptyRow = tabel.querySelector('.empty-row');
    if (emptyRow) {
        emptyRow.remove();
    }
    
    const baris = document.createElement('tr');
    const rataRata = hitungRataRata(data.nilaiMatematika, data.nilaiInggris, data.nilaiUmum);
    const keterangan = tentukanKeterangan(rataRata);
    
    // Tentukan class untuk status
    let statusClass = '';
    if (keterangan === 'Lulus') {
        statusClass = 'status-lulus';
    } else if (keterangan === 'Cadangan') {
        statusClass = 'status-cadangan';
    } else {
        statusClass = 'status-tidaklulus';
    }
    
    // Tentukan class untuk nilai
    function getNilaiClass(nilai) {
        const n = parseFloat(nilai);
        if (n >= 70) return 'nilai-bagus';
        if (n >= 60) return 'nilai-sedang';
        return 'nilai-kurang';
    }
    
    baris.innerHTML = `
        <td>${index}</td>
        <td><strong>${data.kodePendaftaran}</strong></td>
        <td>${data.namaPendaftar}</td>
        <td>${data.jenisKelamin}</td>
        <td>${data.tempatLahir}, ${formatTanggal(data.tanggalLahir)}</td>
        <td>${data.asalSekolah}</td>
        <td class="${getNilaiClass(data.nilaiMatematika)}">${data.nilaiMatematika}</td>
        <td class="${getNilaiClass(data.nilaiInggris)}">${data.nilaiInggris}</td>
        <td class="${getNilaiClass(data.nilaiUmum)}">${data.nilaiUmum}</td>
        <td class="nilai-bagus"><strong>${rataRata}</strong></td>
        <td><span class="${statusClass}">${keterangan}</span></td>
        <td>
            <button class="btn btn-delete" onclick="hapusData(${index - 1})">Hapus</button>
        </td>
    `;
    
    tabel.appendChild(baris);
}

// Render ulang semua data di tabel
function renderTabel() {
    const tabel = document.querySelector('#tabelData tbody');
    tabel.innerHTML = '';
    
    if (dataPendaftar.length === 0) {
        tabel.innerHTML = '<tr class="empty-row"><td colspan="12" style="text-align: center; padding: 20px;">Belum ada data pendaftar</td></tr>';
    } else {
        dataPendaftar.forEach((data, index) => {
            tambahKeTable(data, index + 1);
        });
    }
}

// Hapus data
function hapusData(index) {
    if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
        dataPendaftar.splice(index, 1);
        renderTabel();
        simpanKeLocalStorage();
        showNotification('Data berhasil dihapus!', 'success');
    }
}

// Simpan ke LocalStorage
function simpanKeLocalStorage() {
    localStorage.setItem('dataPendaftar', JSON.stringify(dataPendaftar));
}

// Load dari LocalStorage
function loadDariLocalStorage() {
    const data = localStorage.getItem('dataPendaftar');
    if (data) {
        dataPendaftar = JSON.parse(data);
        renderTabel();
    }
}

// Tampilkan notifikasi
function showNotification(message, type) {
    // Buat elemen notifikasi
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.textContent = message;
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: ${type === 'success' ? '#28a745' : '#dc3545'};
        color: white;
        padding: 15px 25px;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        animation: slideInRight 0.3s ease;
    `;
    
    document.body.appendChild(notification);
    
    // Hapus notifikasi setelah 3 detik
    setTimeout(() => {
        notification.style.animation = 'slideOutRight 0.3s ease';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// Validasi input form
function validasiForm(data) {
    // Validasi Kode Pendaftaran
    if (!validateKodePendaftaran(data.kodePendaftaran)) {
        showNotification('Format Kode Pendaftaran salah! Gunakan format: [A/B/V][1-9]-XXX-[1-9]', 'error');
        return false;
    }
    
    // Validasi Nama
    if (data.namaPendaftar.trim() === '') {
        showNotification('Nama Pendaftar tidak boleh kosong!', 'error');
        return false;
    }
    
    // Validasi Jenis Kelamin
    if (data.jenisKelamin === '') {
        showNotification('Jenis Kelamin harus dipilih!', 'error');
        return false;
    }
    
    // Validasi Tempat Lahir
    if (data.tempatLahir.trim() === '') {
        showNotification('Tempat Lahir tidak boleh kosong!', 'error');
        return false;
    }
    
    // Validasi Tanggal Lahir
    if (data.tanggalLahir === '') {
        showNotification('Tanggal Lahir tidak boleh kosong!', 'error');
        return false;
    }
    
    // Validasi Asal Sekolah
    if (data.asalSekolah.trim() === '') {
        showNotification('Asal Sekolah tidak boleh kosong!', 'error');
        return false;
    }
    
    // Validasi Tahun Lulus
    if (data.tahunLulus === '' || isNaN(data.tahunLulus)) {
        showNotification('Tahun Lulus tidak valid!', 'error');
        return false;
    }
    
    if (data.tahunLulus < 2015 || data.tahunLulus > 2026) {
        showNotification('Tahun Lulus harus antara 2015-2026!', 'error');
        return false;
    }
    
    // Validasi Perkiraan Penghasilan
    if (data.perkiraaanOrtu === '') {
        showNotification('Perkiraan Penghasilan Orang Tua harus dipilih!', 'error');
        return false;
    }
    
    // Validasi Nilai Matematika
    const nilaiMat = parseFloat(data.nilaiMatematika);
    if (isNaN(nilaiMat) || nilaiMat < 0 || nilaiMat > 100) {
        showNotification('Nilai Matematika harus antara 0-100!', 'error');
        return false;
    }
    
    // Validasi Nilai Inggris
    const nilaiIng = parseFloat(data.nilaiInggris);
    if (isNaN(nilaiIng) || nilaiIng < 0 || nilaiIng > 100) {
        showNotification('Nilai Bahasa Inggris harus antara 0-100!', 'error');
        return false;
    }
    
    // Validasi Nilai Umum
    const nilaiUmm = parseFloat(data.nilaiUmum);
    if (isNaN(nilaiUmm) || nilaiUmm < 0 || nilaiUmm > 100) {
        showNotification('Nilai Pengetahuan Umum harus antara 0-100!', 'error');
        return false;
    }
    
    return true;
}

// Handle submit form
document.getElementById('formPendaftaran').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Ambil data dari form
    const data = {
        kodePendaftaran: document.getElementById('kodePendaftaran').value.trim().toUpperCase(),
        namaPendaftar: document.getElementById('namaPendaftar').value.trim(),
        jenisKelamin: document.getElementById('jenisKelamin').value,
        tempatLahir: document.getElementById('tempatLahir').value.trim(),
        tanggalLahir: document.getElementById('tanggalLahir').value,
        asalSekolah: document.getElementById('asalSekolah').value.trim(),
        tahunLulus: document.getElementById('tahunLulus').value,
        perkiraaanOrtu: document.getElementById('perkiraaanOrtu').value,
        nilaiMatematika: document.getElementById('nilaiMatematika').value,
        nilaiInggris: document.getElementById('nilaiInggris').value,
        nilaiUmum: document.getElementById('nilaiUmum').value
    };
    
    // Validasi
    if (!validasiForm(data)) {
        return;
    }
    
    // Tambah ke array
    dataPendaftar.push(data);
    
    // Simpan ke LocalStorage
    simpanKeLocalStorage();
    
    // Render tabel
    renderTabel();
    
    // Reset form
    this.reset();
    
    // Tampilkan notifikasi
    showNotification('Data pendaftar berhasil disimpan!', 'success');
});

// Load data saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    loadDariLocalStorage();
    
    // Tambah CSS untuk animasi
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(100px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes slideOutRight {
            from {
                opacity: 1;
                transform: translateX(0);
            }
            to {
                opacity: 0;
                transform: translateX(100px);
            }
        }
    `;
    document.head.appendChild(style);
});

// Auto-format Kode Pendaftaran
document.getElementById('kodePendaftaran').addEventListener('keyup', function(e) {
    let value = this.value.toUpperCase().replace(/[^A-Z0-9]/g, '');
    
    if (value.length > 0) {
        if (value.length <= 2) {
            this.value = value;
        } else if (value.length <= 5) {
            this.value = value.substring(0, 2) + '-' + value.substring(2);
        } else {
            this.value = value.substring(0, 2) + '-' + value.substring(2, 5) + '-' + value.substring(5, 6);
        }
    }
});

// Format Tahun Lulus
document.getElementById('tahunLulus').addEventListener('blur', function(e) {
    let value = parseInt(this.value);
    if (!isNaN(value)) {
        if (value > 2026) this.value = 2026;
        if (value < 2015) this.value = 2015;
    }
});
