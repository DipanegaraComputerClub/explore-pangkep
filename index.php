<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>travel</title>
        <link rel="stylesheet" href="assets/css/output.css">
        <link rel="stylesheet" href="assets/css/hotel.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
                $(document).ready(function() {
                        $('.pilih-button').on('click', function() {
                                var hotel = $(this).data('hotel');
                                var price = $(this).data('price');
                                $('#modal-hotel').text(hotel);
                                $('#modal-price').text(price);
                        });

                        $('#booking-form').on('submit', function(event) {
                                event.preventDefault();
                                // Add your form submission logic here
                                alert('Form submitted!');
                        });
                });



                document.addEventListener('DOMContentLoaded', function() {
                        document.getElementById('submit-button').addEventListener('click', function() {
                                var form = document.getElementById('booking-form');
                                var formData = new FormData(form);

                                // Buat request menggunakan fetch
                                fetch('./Admin/proses_pesananUser/tambah_data_pesanan.php', {
                                                method: 'POST',
                                                body: formData
                                        })
                                        .then(response => response.text())
                                        .then(data => {
                                                alert('Data pesanan Berhasil Ditambahkan');
                                                window.location.href = 'index.php';
                                        })
                                        .catch(error => {
                                                console.error('Error:', error);
                                                alert('Gagal menambahkan data pesanan');
                                        });
                        });
                });

                document.querySelectorAll('nav ul li a').forEach(anchor => {
                        anchor.addEventListener('click', function(e) {
                                e.preventDefault();

                                document.querySelector(this.getAttribute('href')).scrollIntoView({
                                        behavior: 'smooth'
                                });
                        });
                });
        </script>

        <style>
                .header {
                        text-align: center;
                        margin-bottom: 20px;
                }

                .header h1 {
                        margin: 0;
                        font-size: 24px;
                }

                .price {
                        font-size: 28px;
                        color: #ff6600;
                        margin: 10px 0;
                }

                .note {
                        font-size: 12px;
                        color: #888;
                }

                .hotel {
                        margin-bottom: 20px;
                }

                .hotel-name {
                        font-size: 20px;
                        font-weight: bold;
                        color: #333;
                        margin-bottom: 5px;
                }

                .price-note {
                        font-size: 12px;
                        color: #ff0000;
                        margin: 0 0 18px 0;
                }

                .price-list {
                        display: flex;
                        justify-content: space-between;
                }

                .price-item {
                        background-color: #f9f9f9;
                        padding: 15px;
                        border: 1px solid #ddd;
                        border-radius: 8px;
                        width: 48%;
                        text-align: center;
                        position: relative;
                }

                .price-item p {
                        margin: 0;
                        font-size: 15px;
                        color: #333;
                }

                .choose-button {
                        background-color: #ff6600;
                        color: #fff;
                        border: none;
                        padding: 10px 20px;
                        border-radius: 5px;
                        cursor: pointer;
                        /* position: absolute; */
                        bottom: 0px;
                        right: 20px;
                        width: 70px;
                        /* Specify the desired width */
                        height: 40px;
                        /* Specify the desired height */
                }

                .choose-button:hover {
                        background-color: #e65c00;
                }
        </style>


</head>

<body>
        <section class=" h-[100vh]  bg-cover  bg-center bg-color1" style="background-image: url('assets/img/depanBg.jpeg')">

                <section class="w-full flex flex-wrap justify-center ">
                        <header class="w-[85%]  xl:w-[73%]  container hidden lg:flex justify-between h-[60px]  items-center py-[45px] border-b-[1px] border-white border-opacity-40">
                                <figure class="w-[140px]">

                                </figure>
                                <nav class="h-[100%] md:w-[70%]">
                                        <ul class="h-[100%] flex items-center gap-8 justify-end">
                                                <li class="list-none"><a class="decoration-none text-white hover:text-color3 transition-all duration-500" href="#home">Home</a></li>

                                                <li class="list-none "><a class="decoration-none text-white  hover:text-color3 transition-all duration-500" href="#travel">travel</a></li>
                                                <li class="list-none"><a class="decoration-none text-white  hover:text-color3 transition-all duration-500" href="#budidaya">budidaya</a></li>
                                                <li class="list-none"><a class="decoration-none text-white  hover:text-color3 transition-all duration-500" href="#artikel">artikel</a></li>
                                                <li class="list-none"><a class="decoration-none text-white  hover:text-color3 transition-all duration-500" href="#tentang">Tentang</a></li>
                                        </ul>
                                </nav>
                        </header>

                        <!-- header for mobile -->
                        <header class="w-[95%] sm:w-[70%] md:w-[80%] container flex h-[60px] justify-between  items-center  lg:hidden  py-[45px] relative border-b-[1px] border-white border-opacity-40 ">
                                <figure class="w-[140px]">
                                        <img src="img/logo-light.png" alt="" class="w-[100%]">
                                </figure>
                                <div class=" w-1/2 h-full flex justify-end items-center ">
                                        <i class="bi bi-list text-3xl text-white cursor-pointer ham-menu-icon"></i>
                                </div>

                        </header>
                        <!-- end header mobile  -->

                </section>
                <section class="w-full flex justify-center mt-[180px]">
                        <div class="w-[700px] md:w-[900px] container h-auto  ">
                                <p class="w-full text-center uppercase text-white tracking-widest [word-spacing:8px] mb-4">WELCOME TO PANGKEP</p>
                                <h1 class="w-full text-center text-white text-5xl md:text-7xl font-secondary uppercase tracking-widest">PANGKEP<span class="travol">EXPLORER</span></h1>
                        </div>
                </section>

        </section>

        <section id="home" class="w-full flex justify-center bg-color5 h-auto">
                <div class="w-full container flex justify-between flex-wrap px-0 2xl:px-36 h-auto py-16 ">
                        <div class="w-full lg:w-[50%]  bg-color px-5 ">
                                <p class="text-color4 uppercase">daerah yang penuh dengan wisata dan budidaya</p>
                                <p class="text-color3 text-5xl font-bold uppercase font-secondary my-4"><span class="text-color1"> Pangkep</span> Explore</p>
                                <p class="text-color6">Explore Pangkep adalah sebuah website yang didedikasikan untuk mempromosikan keindahan dan potensi Kabupaten Pangkajene dan Kepulauan (Pangkep) di Sulawesi Selatan, Indonesia. Website ini memberikan informasi mendetail mengenai berbagai destinasi wisata alam, budaya, serta potensi budidaya di wilayah </p>
                                <p class="text-color6">Kabupaten Pangkajene dan Kepulauan (Makassar: ᨄᨀᨍᨙᨊᨙ ᨔᨗᨐᨁ ᨒᨗᨐᨘᨒᨗᨐᨘᨀ, translit. Pangkajeʼneʼ siagang Liuʼ-liukang, disingkat Pangkep) adalah kabupaten di Provinsi Sulawesi Selatan, Indonesia. Kabupaten yang sebelumnya disebut Pangkajene Kepulauan ini beribu kota di Pangkajene. Kabupaten ini memiliki luas wilayah 12.362,73 km² dengan luas wilayah daratan 898,29 km² dan wilayah laut 11.464,44 km². Kabupaten Pangkep adalah pusat dari PT Semen Tonasa yang merupakan salah satu produsen semen terbesar di Indonesia timur.[7]

                                        Kabupaten Pangkep mencakup wilayah utama di Pulau Sulawesi dan kepulauan yang tersebar luas, bahkan beberapa pulau lebih dekat secara geografis dengan Nusa Tenggara Barat dibandingkan Pulau Sulawesi. Beberapa kecamatan di wilayah kepulauan antara lain Liukang Kalmas, Liukang Tangaya, dan Liukang Tupabbiring.</p>

                        </div>
                        <div class="w-full lg:w-[50%] flex flex-col justify-center items-center bg-color12 r-auto pb-8 lg:pb-0 mt-10 lg:mt-0">
                                <figure class="w-[70%] h-[500px] relative">
                                        <div class="w-[100%] h-[100%] bg-color4 absolute left-8 top-8"></div>
                                        <img src="assets/video.gif" alt="Your GIF" class="w-[100%] h-[100%] absolute z-10 object-cover hover:scale-[.95] transition-all duration-500">
                                </figure>
                        </div>

                </div>
        </section>

        <section id="travel" class="w-full flex justify-center bg-color7 py-8">
                <div class="w-full container 2xl:px-36">
                        <div class="header">
                                <h1>Pilihan Paket Traveling</h1>
                                <div class="price"></div>
                                <p class="note">Catatan: Harga tertera merupakan harga Mulai dari dan dapat berubah sewaktu-waktu mengikuti harga dan ketersediaan pada saat pemesanan.</p>
                        </div>
                        <div class="hotel-list container">
                                <?php
                                include 'config/koneksi.php';

                                // Pagination
                                $perPage = 6; // 6 items per page to have 3 rows per page (2 items per row)
                                $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                                $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

                                $totalResult = mysqli_query($conn, "SELECT COUNT(*) as total FROM tbl_pemesanan");
                                $total = mysqli_fetch_assoc($totalResult)['total'];
                                $pages = ceil($total / $perPage);

                                $hasil = mysqli_query($conn, "SELECT * FROM tbl_pemesanan LIMIT $start, $perPage");

                                // Counter to track the number of items per row
                                $counter = 0;
                                while ($row = mysqli_fetch_assoc($hasil)) {
                                        if ($counter % 2 == 0) {
                                                echo '<div class="row mb-4">'; // Start a new row
                                        }
                                ?>
                                        <div class="col-md-6 mb-9 shadow">
                                                <div class="hotel text-center">
                                                        <img src="image/travel<?= $row['foto']; ?>" class="img-fluid mx-auto d-block my-3" alt="<?= $row['nama_hotel']; ?>" style="max-width: 100px;"> <!-- Replace with actual image path -->
                                                        <h2><?= $row['nama_hotel']; ?></h2>
                                                        <p><?= $row['keterangan_hotel'] ?></p>
                                                        <div class="price-option">
                                                                <div>
                                                                        <p>Pesan Sekarang</p>
                                                                        <p>Harga <?= number_format($row['harga_hotel']); ?></p>
                                                                        <button class="pilih-button btn btn-primary" data-toggle="modal" data-target="#myModal" data-hotel="<?= $row['nama_hotel']; ?>" data-price="<?= number_format($row['harga_hotel']); ?>">Pilih</button>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                <?php
                                        $counter++;
                                        if ($counter % 2 == 0) {
                                                echo '</div>'; // End the row after two items
                                        }
                                }
                                if ($counter % 2 != 0) {
                                        echo '</div>'; // Ensure to close the last row if it has less than 2 items
                                }
                                ?>
                        </div>

                        <!-- Pagination -->
                        <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                        <?php for ($i = 1; $i <= $pages; $i++) : ?>
                                                <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                                                        <a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a>
                                                </li>
                                        <?php endfor; ?>
                                </ul>
                        </nav>
                </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                        <div class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Detail Pemesanan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                        <form id="booking-form">
                                                <input type="hidden" id="operation" name="operation" value="add">
                                                <input type="hidden" id="item-id" name="id" value="">
                                                <div class="form-group">
                                                        <label for="nama_pemesan">Nama:</label>
                                                        <input type="text" class="form-control" name="nama_pemesan" id="nama_pemesan" required>
                                                </div>
                                                <div class="form-group">
                                                        <label for="email">Email:</label>
                                                        <input type="email" class="form-control" name="email" id="email" required>
                                                </div>
                                                <div class="form-group">
                                                        <label for="no_telfon">Nomor Telepon:</label>
                                                        <input type="tel" class="form-control" name="no_telfon" id="no_telfon" required>
                                                </div>
                                                <div class="form-group">
                                                        <label for="jumlah">Jumlah Orang</label>
                                                        <input type="tel" class="form-control" name="jumlah_orang" id="jumlah_orang" required>
                                                </div>
                                                <p>Hotel: <span id="modal-hotel"></span></p>
                                                <p>Harga: IDR <span id="modal-price"></span></p>
                                        </form>
                                </div>
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="submit-button">Pesan</button>
                                </div>
                        </div>
                </div>
        </div>





        <section id="budidaya" class="w-full flex justify-center bg-color27 py-10">
                <div class="w-full container 2xl:px-36">
                        <div>
                                <p class="text-color4 uppercase px-5">Berikut Beberapa Hasil Budidaya</p>
                                <p class="text-5xl font-secondary text-color3 px-5">Budidaya <span class="text-color1">Populer</span></p>
                                <div class="flex flex-wrap justify-center xl:justify-between gap-10 px-6 xl:px-0 py-8 lg:px-3">
                                        <?php
                                        include 'config/koneksi.php';
                                        $hasil = mysqli_query($conn, "SELECT * FROM tbl_budidaya");
                                        while ($row = mysqli_fetch_assoc($hasil)) {
                                        ?>
                                                <figure class="w-full md:w-[45%] xl:w-[30%] h-[450px] relative transition-all duration-1000 overflow-hidden group">
                                                        <img src="image<?= $row['foto']; ?>" alt="<?= $row['nama_budidaya']; ?>" class="w-[100%] h-[100%] object-cover group-hover:brightness-75 group-hover:scale-[1.2] absolute transition-all duration-1000">

                                                        <figcaption class="absolute text-white bottom-[20px] left-5 group-hover:bottom-[50px] transition-all duration-700 w-full">
                                                                <div class="flex after:contetn-[''] after:h-[1px] after:bg-op-50 after:w-[20%] after:bg-white after:absolute after:bottom-[-8px] group-hover:after:w-[90%] after:transition-all after:duration-1000">
                                                                        <i class="bi bi-geo-alt text-2xl text-white me-2"></i>
                                                                        <p class="capitalize font-secondary text-3xl"><?= $row['nama_budidaya']; ?></p>
                                                                </div>
                                                                <div class="flex justify-between absolute mt-5 w-full">
                                                                        <p><?= $row['tours']; ?> Tours Package</p>
                                                                        <a href="" class="flex me-9">Explore<i class="bi bi-arrow-right"></i></a>
                                                                </div>
                                                        </figcaption>
                                                </figure>
                                        <?php
                                        }
                                        ?>
                                </div>
                        </div>
                </div>
        </section>


        <section id="artikel" class="w-full flex justify-center bg-color7 py-8 ">
                <div class="w-full container 2xl:px-36">
                        <div>
                                <p class="text-color4 uppercase px-5">LATEST POST</p>
                                <p class="text-5xl font-secondary text-color3 px-5">Artikel <span class="text-color1">Wisata</span></p>

                                <?php
                                include 'config/koneksi.php';

                                // Tentukan jumlah data per halaman
                                $dataPerPage = 3;
                                $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                                $start = ($page > 1) ? ($page * $dataPerPage) - $dataPerPage : 0;

                                // Hitung total data
                                $result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM tbl_data_wisata");
                                $row = mysqli_fetch_assoc($result);
                                $totalData = $row['total'];

                                // Hitung total halaman
                                $totalPages = ceil($totalData / $dataPerPage);

                                // Ambil data untuk halaman saat ini
                                $hasil = mysqli_query($conn, "SELECT * FROM tbl_data_wisata LIMIT $start, $dataPerPage");

                                // Memulai tabel
                                echo '<style>';
                                echo '.grid-container {';
                                echo 'display: grid;';
                                echo 'grid-template-columns: auto auto auto;'; // Mengatur jumlah kolom sesuai kebutuhan
                                echo 'grid-gap: 10px;'; // Mengatur jarak antar gambar
                                echo '}';
                                echo '.grid-container img {';
                                echo 'max-width: 100%;'; // Mengatur lebar maksimum gambar
                                echo 'height: auto;'; // Mengatur tinggi gambar agar proporsional
                                echo '}';
                                echo '.frame {';
                                echo 'border: 2px solid #ccc;'; // Mengatur border
                                echo 'border-radius: 8px;'; // Mengatur sudut border
                                echo 'overflow: hidden;'; // Mengatur overflow untuk memotong gambar yang lebih besar dari frame
                                echo 'position: relative;'; // Mengatur posisi relatif untuk memungkinkan penempatan figcaption
                                echo '}';
                                echo '.frame figcaption {';
                                echo 'background-color: rgba(0, 0, 0, 0.7);'; // Mengatur warna latar belakang figcaption
                                echo 'color: #fff;'; // Mengatur warna teks figcaption
                                echo 'padding: 5px;'; // Mengatur padding figcaption
                                echo 'position: absolute;'; // Mengatur posisi absolut agar figcaption menempel pada gambar
                                echo 'bottom: 0;'; // Mengatur posisi figcaption ke bawah
                                echo 'width: 100%;'; // Mengatur lebar figcaption agar mengikuti lebar gambar
                                echo '}';
                                echo '</style>';

                                echo '<div class="grid-container">'; // Mulai kontainer grid

                                while ($row = mysqli_fetch_assoc($hasil)) {
                                        echo '<div class="frame">';
                                        echo '<a href="wisata/Tentang.php?id_wisata=' . $row['id_wisata'] . '">';
                                        echo '<img src="image' . $row['gambar'] . '">'; // Mengatur ukuran gambar menjadi 100% lebar dan tinggi
                                        echo '</a>';
                                        echo '<figcaption>' . $row['nama_wisata'] . '</figcaption>'; // Menambahkan judul sebagai figcaption
                                        echo '</div>';
                                }

                                echo '</div>'; // Menutup kontainer grid

                                // Link paginasi
                                echo '<div class="pagination">';
                                for ($i = 1; $i <= $totalPages; $i++) {
                                        echo '<a href="?page=' . $i . '">' . $i . '</a> ';
                                }
                                echo '</div>';
                                ?>
                        </div>
                </div>
        </section>

        <style>
                .pagination {
                        text-align: center;
                        margin-top: 20px;
                }

                .pagination a {
                        margin: 0 5px;
                        padding: 8px 16px;
                        text-decoration: none;
                        background-color: #ddd;
                        color: #000;
                        border-radius: 5px;
                }

                .pagination a:hover {
                        background-color: #bbb;
                }
        </style>

        <section id="tentang" class="w-full flex justify-center h-auto  bg-color3">
                <footer class="w-full container h-auto flex flex-col 2xl:px-36 ">
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
        </main>
</body>
<script src="assets/js/master.js"></script>

</html>