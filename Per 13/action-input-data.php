<?php
// Cek button [cite: 140]
if (isset($_POST['Submit']) && $_POST['Submit'] == "Submit") { [cite: 141]
    $id_mahasiswa = $_POST['id_mahasiswa']; [cite: 142]
    $nama = $_POST['nama']; [cite: 143]
    $jurusan = $_POST['jurusan']; [cite: 144]
    $alamat = $_POST['alamat']; [cite: 145]
    $telepon = $_POST['telepon']; [cite: 146]

    // Validasi data kosong [cite: 147]
    if (empty($id_mahasiswa) || empty($nama) || empty($alamat) || empty($telepon)) { [cite: 148]
        ?>
        <script language="JavaScript">
            alert('Data Harap Dilengkapi!'); [cite: 151]
            document.location='download-script-form-input-data.php'; [cite: 152]
        </script>
        <?php
    } else {
        include "../../koneksi-tutor.php"; [cite: 157]
        
        // Cek NIM di database [cite: 158]
        $cek = mysql_num_rows(mysql_query("SELECT id_mahasiswa FROM mahasiswa WHERE id_mahasiswa='$id_mahasiswa'")); [cite: 159]
        if ($cek > 0) { [cite: 160]
            ?>
            <script language="JavaScript">
                alert('NIM sudah dipakai!, silahkan ganti NIM yang lain'); [cite: 163]
                document.location='download-script-form-input-data.php'; [cite: 164]
            </script>
            <?php
        } else {
            // Masukan data ke Table [cite: 169]
            $input = "INSERT INTO mahasiswa (id_mahasiswa,nama,jurusan,alamat,telepon) VALUES ('$id_mahasiswa','$nama','$jurusan','$alamat','$telepon')"; [cite: 170]
            $query_input = mysql_query($input); [cite: 171]
            
            if ($query_input) { [cite: 172]
                ?>
                <script language="JavaScript">
                    alert('Input Data Mahasiswa Berhasil'); [cite: 176]
                    document.location='download-script-form-input-data.php'; [cite: 177]
                </script>
                <?php
            } else { [cite: 181]
                echo "Input Data Mahasiswa Gagal!, Silahkan diulangi!"; [cite: 183]
            }
            // Tutup koneksi engine MySQL [cite: 185]
            mysql_close($Open); [cite: 186]
        }
    }
}
?>