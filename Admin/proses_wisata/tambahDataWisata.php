<?php
include '../../config/koneksi.php';


$nama = $_POST['nama_wisata'];
$keterangan= $_POST['keterangan'];
$nama_gambar = $_FILES['gambar']['name'];
$tmp_file = $_FILES['gambar']['tmp_name'];

$ekstensiGambarValid = explode(".", $nama_gambar);
$ekstensiGambarValid = strtolower(end($ekstensiGambarValid));

$namaGambarBaru = uniqid();
$namaGambarBaru .= ".";
$namaGambarBaru .= $ekstensiGambarValid;

if (move_uploaded_file($tmp_file, "../../image" . $namaGambarBaru)) {

    $result = mysqli_query($conn, "INSERT INTO tbl_data_wisata (nama_wisata, keterangan, gambar) VALUES('$nama','$keterangan','$namaGambarBaru')");

    if ($result) {
        echo "
		<script>
		alert('PAKET BERHASIL DITAMBAHKAN');
		window.location = '../../homeAdmin.php';
		</script>
		";
    }
}
