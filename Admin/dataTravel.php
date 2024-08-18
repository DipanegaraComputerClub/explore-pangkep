<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Tampilan Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../template/theme/images/favicon.png">
    <link href="../template/theme/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../template/theme/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




    <script>
$(document).ready(function() {
    $('#exampleModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var id_pemesanan = button.data('idPemesanan'); // Extract info from data-* attributes
        var nama_hotel = button.data('namaHotel');
        var harga_hotel = button.data('hargaHotel');
        var keterangan_hotel = button.data('keteranganHotel');

        var modal = $(this);
        if (id_pemesanan) {
            modal.find('.modal-title').text('Edit Data Pemesanan');
            modal.find('#form-pemesanan').attr('action', 'proses_pemesanan/editpemesanan.php');
            modal.find('#id_pemesanan').val(id_pemesanan);
            modal.find('#nama_hotel').val(nama_hotel);
            modal.find('#harga_hotel').val(harga_hotel);
            modal.find('#keterangan_hotel').val(keterangan_hotel);
        } else {
            modal.find('.modal-title').text('Tambah Data Pemesanan');
            modal.find('#form-pemesanan').attr('action', 'proses_pemesanan/tambahpemesanan.php');
            modal.find('#id_pemesanan').val('');
            modal.find('#nama_hotel').val('');
            modal.find('#harga_hotel').val('');
            modal.find('#keterangan_hotel').val('');
        }
    });

    $('#form-pemesanan').submit(function() {
        var nama_hotel = $('#nama_hotel').val();
        var harga_hotel = $('#harga_hotel').val();
        var keterangan_hotel = $('#keterangan_hotel').val();

        if (nama_hotel === '' || harga_hotel === '' || keterangan_hotel === '') {
            alert('Nama, Harga, dan Keterangan harus diisi.');
            return false;
        }
        return true;
    });
});
</script>


</head>

<body>
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="../assets/logoKonsentrasi.svg" alt="">
                <img class="logo-compact" src="../template/theme/images/logo-text.png" alt="">
                <img class="brand-title" src="../template/theme/images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">





                                    </ul>
                                    <a class="all-notification" href="#">Tampilkan Semua Notifikasi <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Chat </span>
                                    </a>
                                    <a href="index.php" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">

                    <li class="nav-label">Apps</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-app-store"></i><span class="nav-text">Produk</span></a>
                        <ul aria-expanded="false">
                            <li><a href="../homeAdmin.php">Data Artikel</a></li>
                            <li><a href="dataBudidaya.php">Data Budidaya</a></li>
                            <li><a href="datapesanan.php">Data Pesanan</a></li>
                        </ul>
                    </li>
                    <li><a class="" href="dataTravel.php" aria-expanded="false"><i class="icon icon-chart-bar-33"></i><span class="nav-text">Pemesanan Travel</span></a>
                    <li><a class="" href="../index.php" aria-expanded="false"><i class="bi bi-box-arrow-left"></i><span class="nav-text">Logout </span></a>

                    </li>
                </ul>
            </div>


        </div>
        <div class="content-body">
            <div class="container-fluid">

                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Pemesanan</h4>
                                <div class="button">
                                    <!-- <a href="penjual/form_penjual.php" class="btn btn-secondary btn-sm">Tambah Data</a> -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
                                </div>
                            </div>

                            <!-- Tambah Data Wisata -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pemesanan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="basic-form">
                                                <form id="form-pemesanan" method="POST" enctype="multipart/form-data">
                                                    <input type="hidden" name="id_pemesanan" id="id_pemesanan">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Nama Pemesanan</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="nama_hotel" id="nama_hotel" placeholder="Nama" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Harga</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="harga_hotel" id="harga_hotel" placeholder="Masukkan harga" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Deskripsi</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="keterangan_hotel" id="keterangan_hotel" placeholder="Keterangan" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Gambar</label>
                                                        <div class="col-sm-10">
                                                            <input type="file" class="form-control" name="foto" id="foto">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Hotel</th>
                                                <th>Harga</th>
                                                <th>Keterangan</th>
                                                <th>Foto</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include '../config/koneksi.php';
                                            $hasil = mysqli_query($conn, "SELECT * FROM tbl_pemesanan ");
                                            $no = 1;
                                            while ($row = mysqli_fetch_assoc($hasil)) {
                                            ?>
                                                <tr>
                                                    <td><?= $no; ?></td>
                                                    <td><?= $row['nama_hotel']; ?></td>
                                                    <td><?= $row['harga_hotel']; ?></td>
                                                    <td><?= $row['keterangan_hotel']; ?></td>

                                                    <td>
                                                        <img src="../image/travel<?= $row['foto']; ?>" width="100">
                                                    </td>

                                                    <td>


                                                        <button class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-id-pemesanan="<?= $row['id_pemesanan']; ?>" data-nama-hotel="<?= $row['nama_hotel']; ?>" data-harga-hotel="<?= $row['harga_hotel']; ?>" data-keterangan-hotel="<?= $row['keterangan_hotel']; ?>" data-foto-budidaya="<?= $row['foto']; ?>">Edit</button>
                                                        </button>
                                                        <a href="proses_pemesanan/hapuspemesanan.php?id_pemesanan=<?= $row['id_pemesanan']; ?>"><button class="btn btn-danger">hapus</button></a>
                                                    </td>


                                                </tr>
                                            <?php
                                                $no++;
                                            }
                                            ?>



                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>

    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
        </div>
    </div>



    <script src="../template/theme/vendor/global/global.min.js"></script>
    <script src="../template/theme/js/quixnav-init.js"></script>
    <script src="../template/theme/js/custom.min.js"></script>



    <!-- Datatable -->
    <script src="../template/theme/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../template/theme/js/plugins-init/datatables.init.js"></script>


</body>

</html>