<?php
include '../../config/koneksi.php';

if (!isset($_GET['id_budidaya']) || empty($_GET['id_budidaya'])) {
    echo "
    <script>
    alert('ID Wisata tidak valid.');
    window.location = '../dataBudidaya.php';
    </script>
    ";
    exit();
}

$id_budidaya = $_GET['id_budidaya'];


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

$hapusWisata = mysqli_query($conn, "SELECT * FROM tbl_budidaya WHERE id_budidaya='$id_budidaya'");


if (!$hapusWisata) {
    echo "Error Query: " . mysqli_error($conn);
    exit();
}

if (mysqli_num_rows($hapusWisata) > 0) {
    $row = mysqli_fetch_array($hapusWisata);
    $gambar = $row['foto'];


    echo "Nama File Gambar: $gambar<br>";

    $file_path = "../../image" . $gambar;


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
        window.location = '../dataBudidaya.php';
        </script>
        ";
        exit();
    }

    $del = mysqli_query($conn, "DELETE FROM tbl_budidaya WHERE id_budidaya='$id_budidaya'");

    if ($del) {
        echo "
        <script>
        alert('DATA BERHASIL DIHAPUS');
        window.location = '../dataBudidaya.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('DATA GAGAL DIHAPUS');
        window.location = '../dataBudidaya.php';
        </script>
        ";
    }
} else {

    echo "Data tidak ditemukan untuk ID Wisata: $id_budidaya<br>";
}
