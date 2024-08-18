<?php
include '../../config/koneksi.php';

echo "<pre>";
print_r($_GET);
echo "</pre>";

if (!isset($_GET['id_wisata']) || empty($_GET['id_wisata'])) {
    echo "
    <script>
    alert('ID Wisata tidak valid.');
    window.location = '../../homeAdmin.php';
    </script>
    ";
    exit();
}

$id_wisata = $_GET['id_wisata'];


echo "ID Wisata: $id_wisata<br>";

if (!is_numeric($id_wisata)) {
    echo "
    <script>
    alert('ID Wisata harus berupa angka.');
    window.location = '../../homeAdmin.php';
    </script>
    ";
    exit();
}

$hapusWisata = mysqli_query($conn, "SELECT * FROM tbl_data_wisata WHERE id_wisata='$id_wisata'");


if (!$hapusWisata) {
    echo "Error Query: " . mysqli_error($conn);
    exit();
}

if (mysqli_num_rows($hapusWisata) > 0) {
    $row = mysqli_fetch_array($hapusWisata);
    $gambar = $row['gambar'];

    
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
        window.location = '../../homeAdmin.php';
        </script>
        ";
        exit();
    }

    $del = mysqli_query($conn, "DELETE FROM tbl_data_wisata WHERE id_wisata='$id_wisata'");

    if ($del) {
        echo "
        <script>
        alert('DATA BERHASIL DIHAPUS');
        window.location = '../../homeAdmin.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('DATA GAGAL DIHAPUS');
        window.location = '../../homeAdmin.php';
        </script>
        ";
    }
} else {
    
    echo "Data tidak ditemukan untuk ID Wisata: $id_wisata<br>";
}
?>
