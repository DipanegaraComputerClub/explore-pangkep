<?php
include '../../config/koneksi.php';


$nama_budidaya = $_POST['nama_budidaya'];
$descripsi = $_POST['descripsi'];
$nama_gambar = $_FILES['foto']['name'];
$tmp_gambar = $_FILES['foto']['tmp_name'];

$ekstensiFotoValid = explode(".", $nama_gambar);
$ekstensiFotoValid = strtolower(end($ekstensiFotoValid));

$namaFotoBaru = uniqid();
$namaFotoBaru .= '.';
$namaFotoBaru .= $ekstensiFotoValid;

if (move_uploaded_file($tmp_gambar, "../../image" . $namaFotoBaru)) {
    $result = mysqli_query($conn, "INSERT INTO tbl_budidaya(nama_budidaya,descripsi,foto) VALUES('$nama_budidaya','$descripsi','$namaFotoBaru')");

    if ($result) {
        echo "
        <script>
        alert('Data Pemesanan Berhasil Ditambahkan');    
        window.location = '../dataBudidaya.php';
        </script>
        ";
    }
}
