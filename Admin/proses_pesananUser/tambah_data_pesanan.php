<?php
include '../../config/koneksi.php';

// Mendapatkan data dari form POST
$nama_pemesan = $_POST['nama_pemesan'];
$email_pemesan = $_POST['email'];
$no_telfon = $_POST['no_telfon'];

// Menggunakan prepared statement untuk mencegah SQL injection
$stmt = $conn->prepare("INSERT INTO tbl_pesanan_user (nama_pemesan, email, no_telfon) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nama_pemesan, $email_pemesan, $no_telfon);

// Eksekusi statement dan cek keberhasilan
if ($stmt->execute()) {
    echo "
    <script>
    alert('Data pesanan Berhasil Ditambahkan');    
    window.location = '../../index.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Gagal menambahkan data pesanan: " . $stmt->error . "');    
    window.location = '../../index.php';
    </script>
    ";
}

// Menutup statement
$stmt->close();

// Menutup koneksi
$conn->close();
?>
