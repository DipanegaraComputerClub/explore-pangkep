<?php
include '../config/koneksi.php';

// Pastikan parameter ID tersedia
if (isset($_GET['id_wisata'])) {
    $id = $_GET['id_wisata'];

    // Query untuk mengambil informasi berdasarkan ID
    $query = "SELECT * FROM tbl_data_wisata WHERE id_wisata = $id";
    $result = mysqli_query($conn, $query);

    // Pastikan hasil query tidak kosong
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nama_wisata = $row['nama_wisata'];
        $deskripsi = $row['keterangan'];
        $gambar = $row['gambar'];
?>
        <!DOCTYPE html>
        <html lang="id">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $nama_wisata; ?></title>
            <link rel="stylesheet" href="../assets/css/output.css">
            <link rel="stylesheet" href="../assets/css/touring.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
            <style>
                body {
                    font-family: 'Roboto', sans-serif;
                    background-color: #f4f4f4;
                    margin: 0;
                    padding: 0;
                }

                .container {
                    display: flex;
                    max-width: 1000px;
                    max-height: 900px ;
                    margin: 20 auto;
                    padding: 20px;
                }

                .content {
                    flex: 2;
                    background-color: #fff;
                    padding: 20px;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    margin-right: 20px;
                }

                .sidebar {
                    flex: 1;
                }

                .sidebar .widget {
                    background-color: #fff;
                    padding: 20px;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    margin-bottom: 20px;
                }

                .sidebar .widget h3 {
                    margin-top: 0;
                    border-bottom: 2px solid #e74c3c;
                    padding-bottom: 10px;
                    color: #e74c3c;
                }

                .sidebar .widget ul {
                    list-style: none;
                    padding: 0;
                }

                .sidebar .widget ul li {
                    margin-bottom: 10px;
                }

                .content img {
                    max-width: 80%;
                    max-height: 60%;
                    height: auto;
                    display: block;
                    margin: 20px 390px;
                    border-radius: 0px;
                }

                h1 {
                    font-size: 2em;
                    color: #333;
                    text-align: center;
                }

                p {
                    color: #555;
                    line-height: 1.6;
                }

                p strong {
                    color: #000;
                }

                .post-meta {
                    display: flex;
                    justify-content: space-between;
                    font-size: 0.9em;
                    color: #999;
                    margin-bottom: 20px;
                }
            </style>
        </head>

        <body>
            <div class="container">
                <div class="content">
                    <h1><?php echo $nama_wisata; ?></h1>
                    <div class="post-meta">
                        <div>Muhammad Aslam</div>
                        <div>Owner Ikan Kering</div>
                        <div>Sukseski</div>
                    </div>
                    <img src="../image<?php echo $gambar; ?>" alt="<?php echo $nama_wisata; ?>"">
                    <p><strong>Deskripsi:</strong> <?php echo $deskripsi; ?></p>
                </div>
                
            </div>
            <br>
            
            
            <section class="w-full flex justify-center h-auto  bg-color6">
                <footer class="w-full container h-auto flex flex-col 2xl:px-26 ">
                    <div class="flex justify-center ">
                        <div class="w-full lg:w-[30%] flex  items-center py-2 lg:border-r-2 lg:border-r-color5 my-5 ps-8 lg:ps-0">
                            <i class="bi bi-telephone-outbound text-4xl me-4 text-white bg-color1 p-3"></i>
                            <div class="w-full text-white">
                                <p class="font-secondary">Kontak</p>
                                <p>09188085590</p>
                            </div>
                        </div>
                        <div class="w-full lg:w-[35%] flex items-center py-2 lg:border-r-2 lg:border-r-color5 my-5 ps-8">
                            <i class="bi-envelope-paper text-4xl me-4 text-white bg-color1 p-3"></i>
                            <div class="w-full text-white">
                                <p class="font-secondary">GMAIL</p>
                                <p>fauzan@gmail.com</p>
                            </div>
                        </div>
                        <div class="w-full lg:w-[30%] flex items-center py-2 my-5 ps-8">
                            <i class="bi bi-map text-4xl me-4 text-white bg-color1 p-3 "></i>
                            <div class="w-full text-white">
                                <p class="font-secondary">Alamat</p>
                                <p>Pangkep, Sulawesi Selatan </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex  justify-between  my-10 flex-wrap  ">


                </footer>
            </section>
        </body>

        </html>
<?php
    } else {
        echo 'Data tidak ditemukan.';
    }
} else {
    echo 'ID tidak ditemukan.';
}
?>