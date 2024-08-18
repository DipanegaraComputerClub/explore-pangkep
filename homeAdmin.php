<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Tampilan Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../template/theme/images/favicon.png">
    <link href="template/theme/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="template/theme/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




    <script>
        $(document).ready(function() {
            $('#exampleModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var id_wisata = button.data('id_wisata'); // Extract info from data-* attributes
                var nama_wisata = button.data('nama_wisata');
                var keterangan = button.data('keterangan');
                // Assuming 'gambar' is handled separately for file uploads

                var modal = $(this);
                if (id_wisata) {
                    modal.find('.modal-title').text('Edit Data Wisata');
                    modal.find('#form-wisata').attr('action', './Admin/proses_wisata/update_wisata.php');
                    modal.find('#id_wisata').val(id_wisata);
                    modal.find('#nama_wisata').val(nama_wisata);
                    modal.find('#keterangan').val(keterangan);
                    // Handle 'gambar' if needed
                } else {
                    modal.find('.modal-title').text('Tambah Data Wisata');
                    modal.find('#form-wisata').attr('action', './Admin/proses_wisata/tambahDataWisata.php');
                    modal.find('#id_wisata').val('');
                    modal.find('#nama_wisata').val('');
                    modal.find('#keterangan').val('');
                    // Clear 'gambar' if needed
                }
            });

            // JavaScript validation example (client-side validation)
            $('#form-wisata').submit(function() {
                var nama_wisata = $('#nama_wisata').val();
                var keterangan = $('#keterangan').val();

                if (nama_wisata === '' || keterangan === '') {
                    alert('Nama Wisata dan Keterangan harus diisi.');
                    return false; // Prevent form submission
                }
                // Additional validation logic if needed

                return true; // Allow form submission
            });
        });
    </script>


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <!-- <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div> -->
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="assets/logoKonsentrasi.svg" alt="">
                <img class="logo-compact" src="template/theme/images/logo-text.png" alt="">
                <img class="brand-title" src="template/theme/images/logo-text.png" alt="">
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
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">

                    <li class="nav-label">Apps</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-app-store"></i><span class="nav-text">Produk</span></a>
                        <ul aria-expanded="false">
                            <li><a href="homeAdmin.php">Data Artikel</a></li>
                            <li><a href="admin/dataBudidaya.php">Data Budidaya</a></li>
                            <li><a href="admin/datapesanan.php">Data Pesanan</a></li>
                        </ul>
                    </li>
                    <li><a class="" href="admin/dataTravel.php" aria-expanded="false"><i class="icon icon-chart-bar-33"></i><span class="nav-text">Pemesanan Travel</span></a>
                    <li><a class="" href="index.php" aria-expanded="false"><i class="bi bi-box-arrow-left"></i><span class="nav-text">Logout </span></a>

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
                                <h4 class="card-title">Data Artikel</h4>
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
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Wisata</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="basic-form">
                                                <form id="form-wisata" action="./Admin/proses_wisata/tambahDataWisata.php" method="POST" enctype="multipart/form-data">
                                                    <input type="hidden" name="id_wisata" id="id_wisata">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Nama Wisata</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="nama_wisata" id="nama_wisata" placeholder="Nama">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Deskripsi</label>
                                                        <div class="col-sm-10">
                                                            
                                                            <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Gambar</label>
                                                        <div class="col-sm-10">
                                                            <input type="file" class="form-control" name="gambar" id="gambar" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Edit Data Wisata -->
                            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Wisata</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="basic-form">
                                                <form id="form-wisata" action="./Admin/proses_wisata/update_wisata.php" method="POST" enctype="multipart/form-data">
                                                    <input type="hidden" name="id_wisata" id="id_wisata">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Nama Wisata</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="nama_wisata" id="nama_wisata" placeholder="Nama">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Deskripsi</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Gambar</label>
                                                        <div class="col-sm-10">
                                                            <input type="file" class="form-control" name="gambar" id="gambar" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
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
                                                <th>Nama</th>
                                                <th>keterangan</th>
                                                <th>Foto</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include 'config/koneksi.php';
                                            $hasil = mysqli_query($conn, "SELECT * FROM tbl_data_wisata ");
                                            $no = 1;
                                            while ($row = mysqli_fetch_assoc($hasil)) {
                                            ?>
                                                <tr>
                                                    <td><?= $no; ?></td>
                                                    <td><?= $row['nama_wisata']; ?></td>
                                                    <td><?= $row['keterangan']; ?></td>

                                                    <td>
                                                        <img src="image<?= $row['gambar']; ?>" width="100">
                                                    </td>

                                                    <td>


                                                        <button class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-id_wisata="<?= $row['id_wisata']; ?>" data-nama_wisata="<?= $row['nama_wisata']; ?>" data-keterangan="<?= $row['keterangan']; ?>" data-gambar="<?= $row['gambar']; ?>">
                                                            Edit
                                                        </button>
                                                        <a href="Admin/proses_wisata/HapusData.php?id_wisata=<?= $row['id_wisata']; ?>"><button class="btn btn-danger">hapus</button></a>
                                                    </td>


                                                </tr>
                                            <?php
                                                $no++;
                                            }
                                            ?>
                                            <!-- <tr>
                                                <td>1</td>
                                                <td>Udang</td>
                                                <td>Stok</td>
                                                <td>Alamat</td>
                                                <td>Not</td>   
                                                <td>Aksi</td>   
                                            </tr> -->


                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
            Footer start
        ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
        </div>
    </div>
    <!--**********************************
            Footer end
        ***********************************-->
    <!--**********************************
        Scripts
    ***********************************-->


    <script src="template/theme/vendor/global/global.min.js"></script>
    <script src="template/theme/js/quixnav-init.js"></script>
    <script src="template/theme/js/custom.min.js"></script>



    <!-- Datatable -->
    <script src="template/theme/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="template/theme/js/plugins-init/datatables.init.js"></script>


</body>

</html>