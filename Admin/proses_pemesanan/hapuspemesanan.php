<?php
include '../../config/koneksi.php';

if (!isset($_GET['id_pemesanan']) || empty($_GET['id_pemesanan'])) {
    echo "
    <script>
    alert('ID Wisata tidak valid.');
    window.location = '../dataBudidaya.php';
    </script>
    ";
    exit();
}

$id_budidaya = $_GET['id_pemesanan'];


echo "ID Wisata: $id_budidaya<br>";

if (!is_numeric($id_budidaya)) {
    echo "
    <script>
    alert('ID Wisata harus berupa angka.');
    window.location = '../dataBudidaya.php';
    </script>
    ";
    exit();
}

$hapusWisata = mysqli_query($conn, "SELECT * FROM tbl_pemesanan WHERE id_pemesanan='$id_budidaya'");


if (!$hapusWisata) {
    echo "Error Query: " . mysqli_error($conn);
    exit();
}

if (mysqli_num_rows($hapusWisata) > 0) {
    $row = mysqli_fetch_array($hapusWisata);
    $gambar = $row['foto'];


    echo "Nama File Gambar: $gambar<br>";

    $file_path = "../../image/travel" . $gambar;


    echo "File Path: $file_path<br>";

    if (file_exists($file_path)) {
        if (unlink($file_path)) {
            echo "File berhasil dihapus.<br>";
        } else {
            echo "Gagal menghapus file.<br>";
        }
    } else {
        echo "
        <script>
        alert('File tidak ditemukan.');
        window.location = '../dataTravel.php';
        </script>
        ";
        exit();
    }

    $del = mysqli_query($conn, "DELETE FROM tbl_pemesanan WHERE id_pemesanan='$id_budidaya'");

    if ($del) {
        echo "
        <script>
        alert('DATA BERHASIL DIHAPUS');
        window.location = '../dataTravel.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('DATA GAGAL DIHAPUS');
        window.location = '../dataTravel.php';
        </script>
        ";
    }
} else {

    echo "Data tidak ditemukan untuk ID Wisata: $id_budidaya<br>";
}
