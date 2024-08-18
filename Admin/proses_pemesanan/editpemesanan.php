<?php
include '../../config/koneksi.php';

$id_pemesanan = isset($_POST['id_pemesanan']) ? $_POST['id_pemesanan'] : '';
$nama_hotel = isset($_POST['nama_hotel']) ? $_POST['nama_hotel'] : '';
$harga_hotel = isset($_POST['harga_hotel']) ? $_POST['harga_hotel'] : '';
$keterangan_hotel = isset($_POST['keterangan_hotel']) ? $_POST['keterangan_hotel'] : '';
$nama_gambar = isset($_FILES['foto']['name']) ? $_FILES['foto']['name'] : '';
$tmp_gambar = isset($_FILES['foto']['tmp_name']) ? $_FILES['foto']['tmp_name'] : '';

if ($id_pemesanan) {
    if ($nama_gambar && $tmp_gambar) {
        $ekstensiFotoValid = explode(".", $nama_gambar);
        $ekstensiFotoValid = strtolower(end($ekstensiFotoValid));

        $namaFotoBaru = uniqid();
        $namaFotoBaru .= '.';
        $namaFotoBaru .= $ekstensiFotoValid;

        if (move_uploaded_file($tmp_gambar, "../../image" . $namaFotoBaru)) {
            $result = mysqli_query($conn, "UPDATE tbl_pemesanan SET nama_hotel='$nama_hotel', harga_hotel='$harga_hotel', keterangan_hotel='$keterangan_hotel', foto='$namaFotoBaru' WHERE id_pemesanan='$id_pemesanan'");
        }
    } else {
        $result = mysqli_query($conn, "UPDATE tbl_pemesanan SET nama_hotel='$nama_hotel', harga_hotel='$harga_hotel', keterangan_hotel='$keterangan_hotel' WHERE id_pemesanan='$id_pemesanan'");
    }

    if ($result) {
        echo "
        <script>
        alert('Data Pemesanan Berhasil Diperbarui');    
        window.location = '../dataTravel.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Gagal memperbarui data Pemesanan');    
        window.location = '../dataTravel.php';
        </script>
        ";
    }
} else {
    echo "
    <script>
    alert('ID Pemesanan tidak ditemukan');    
    window.location = '../dataTravel.php';
    </script>
    ";
}
?>
