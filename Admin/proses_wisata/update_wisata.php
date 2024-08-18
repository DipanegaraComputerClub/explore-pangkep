<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id_wisata = $_POST['id_wisata'];
    $nama_wisata = $_POST['nama_wisata'];
    $keterangan = $_POST['keterangan'];

    // Handling file upload (if applicable)
    $gambar = $_FILES['gambar']['name'];
    $gambar_tmp = $_FILES['gambar']['tmp_name'];
    $upload_dir = '../../image'; // Adjust as per your server setup
    $gambar_path = $upload_dir . basename($gambar);

    // If file is uploaded, move it to desired location
    if (!empty($gambar_tmp)) {
        move_uploaded_file($gambar_tmp, $gambar_path);
    }

    // Check if it's an update or insert operation
    if (!empty($id_wisata)) {
        // Update query
        $sql = "UPDATE tbl_data_wisata SET nama_wisata = ?, keterangan = ?";
        // If file uploaded, include it in update
        if (!empty($gambar)) {
            $sql .= ", gambar = ?";
        }
        $sql .= " WHERE id_wisata = ?";
        
        $stmt = $conn->prepare($sql);
        if (!empty($gambar)) {
            $stmt->bind_param("sssi", $nama_wisata, $keterangan, $gambar_path, $id_wisata);
        } else {
            $stmt->bind_param("ssi", $nama_wisata, $keterangan, $id_wisata);
        }
    } else {
        // Insert query
        $sql = "INSERT INTO tbl_data_wisata (nama_wisata, keterangan, gambar) VALUES (?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nama_wisata, $keterangan, $gambar_path);
    }

    // Execute SQL statement
    if ($stmt->execute()) {
        header("Location: ../../homeAdmin.php"); // Redirect to appropriate page after insert/update
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $stmt->error;
    }

    $stmt->close();
}

mysqli_close($conn);
?>
