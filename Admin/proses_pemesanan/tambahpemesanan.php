<?php
include '../../config/koneksi.php';


$nama_hotel = $_POST['nama_hotel'];
$harga_hotel = $_POST['harga_hotel'];
$keterangan_hotel = $_POST['keterangan_hotel'];
$nama_gambar = $_FILES['foto']['name'];
$tmp_gambar = $_FILES['foto']['tmp_name'];

$ekstensiFotoValid = explode(".", $nama_gambar);
$ekstensiFotoValid = strtolower(end($ekstensiFotoValid));

$namaFotoBaru = uniqid();
$namaFotoBaru .= '.';
$namaFotoBaru .= $ekstensiFotoValid;

if (move_uploaded_file($tmp_gambar, "../../image/travel" . $namaFotoBaru)) {
    $result = mysqli_query($conn, "INSERT INTO tbl_pemesanan(nama_hotel, harga_hotel,keterangan_hotel,foto) VALUES('$nama_hotel','$harga_hotel','$keterangan_hotel','$namaFotoBaru')");

    if ($result) {
        echo "
        <script>
        alert('Data Pemesanan Berhasil Ditambahkan');    
        window.location = '../dataTravel.php';
        </script>
        ";
    }
}
