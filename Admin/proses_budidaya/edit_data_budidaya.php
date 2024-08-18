<?php
include '../../config/koneksi.php';

// Periksa apakah data POST dan FILES ada
$id_budidaya = isset($_POST['id_budidaya']) ? $_POST['id_budidaya'] : '';
$nama_budidaya = isset($_POST['nama_budidaya']) ? $_POST['nama_budidaya'] : '';
$descripsi = isset($_POST['descripsi']) ? $_POST['descripsi'] : '';
$nama_gambar = isset($_FILES['foto']['name']) ? $_FILES['foto']['name'] : '';
$tmp_gambar = isset($_FILES['foto']['tmp_name']) ? $_FILES['foto']['tmp_name'] : '';

// Proses jika id_budidaya ada
if ($id_budidaya) {
    // Jika ada file yang diunggah
    if ($nama_gambar && $tmp_gambar) {
        $ekstensiFotoValid = explode(".", $nama_gambar);
        $ekstensiFotoValid = strtolower(end($ekstensiFotoValid));

        $namaFotoBaru = uniqid();
        $namaFotoBaru .= '.';
        $namaFotoBaru .= $ekstensiFotoValid;

        if (move_uploaded_file($tmp_gambar, "../../image" . $namaFotoBaru)) {
            $result = mysqli_query($conn, "UPDATE tbl_budidaya SET nama_budidaya='$nama_budidaya', descripsi='$descripsi', foto='$namaFotoBaru' WHERE id_budidaya='$id_budidaya'");
        }
    } else {
        $result = mysqli_query($conn, "UPDATE tbl_budidaya SET nama_budidaya='$nama_budidaya', descripsi='$descripsi' WHERE id_budidaya='$id_budidaya'");
    }

    if ($result) {
        echo "
        <script>
        alert('Data Budidaya Berhasil Diperbarui');    
        window.location = '../dataBudidaya.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Gagal memperbarui data Budidaya');    
        window.location = '../dataBudidaya.php';
        </script>
        ";
    }
} else {
    echo "
    <script>
    alert('ID Budidaya tidak ditemukan');    
    window.location = '../dataBudidaya.php';
    </script>
    ";
}
?>
