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
            var id_budidaya = button.data('idBudidaya'); // Extract info from data-* attributes
            var nama_budidaya = button.data('namaBudidaya');
            var descripsi = button.data('descripsiBudidaya');
            
            var modal = $(this);
            if (id_budidaya !== undefined && id_budidaya !== '') {
                modal.find('.modal-title').text('Edit Data Budidaya');
                modal.find('#form-budidaya').attr('action', 'proses_budidaya/edit_data_budidaya.php');
                modal.find('#id_budidaya').val(id_budidaya);
                modal.find('#nama_budidaya').val(nama_budidaya);
                modal.find('#descripsi').val(descripsi);
            } else {
                modal.find('.modal-title').text('Tambah Data Budidaya');
                modal.find('#form-budidaya').attr('action', 'proses_budidaya/tambah_data_budidaya.php');
                modal.find('#id_budidaya').val('');
                modal.find('#nama_budidaya').val('');
                modal.find('#descripsi').val('');
            }
        });

        // JavaScript validation example (client-side validation)
        $('#form-budidaya').submit(function() {
            var nama_budidaya = $('#nama_budidaya').val();
            var descripsi = $('#descripsi').val();

            if (nama_budidaya === '' || descripsi === '') {
                alert('Nama Budidaya dan Keterangan harus diisi.');
                return false; // Prevent form submission
            }

            return true; // Allow form submission
        });
    });
</script>





</head>

<body>

    <div id="main-wrapper">
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="assets/logoKonsentrasi.svg" alt="">
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
                            <li><a href="../homeAdmin.php">Data Artikel</a></li>
                            <li><a href="dataBudidaya.php">Data Budidaya</a></li>
                            <li><a href="datapesanan.php">Data pesanan</a></li>
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
                                <h4 class="card-title">Data budidaya</h4>
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
                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="form-budidaya" method="POST" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <input type="hidden" id="id_budidaya" name="id_budidaya">
                                                <div class="form-group">
                                                    <label for="nama_budidaya">Nama Budidaya</label>
                                                    <input type="text" class="form-control" id="nama_budidaya" name="nama_budidaya" placeholder="Nama Budidaya" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="descripsi">Deskripsi</label>
                                                    <textarea class="form-control" id="descripsi" name="descripsi" placeholder="Deskripsi" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="foto">Foto</label>
                                                    <input type="file" class="form-control" id="foto" name="foto">
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
                                            include '../config/koneksi.php';
                                            $hasil = mysqli_query($conn, "SELECT * FROM tbl_budidaya ");
                                            $no = 1;
                                            while ($row = mysqli_fetch_assoc($hasil)) {
                                            ?>
                                                <tr>
                                                    <td><?= $no; ?></td>
                                                    <td><?= $row['nama_budidaya']; ?></td>
                                                    <td><?= $row['descripsi']; ?></td>

                                                    <td>
                                                        <img src="../image<?= $row['foto']; ?>" width="100">
                                                    </td>

                                                    <td>
                                                        <button class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-id-budidaya="<?= $row['id_budidaya']; ?>" data-nama-budidaya="<?= $row['nama_budidaya']; ?>" data-descripsi-budidaya="<?= $row['descripsi']; ?>" data-foto-budidaya="<?= $row['foto']; ?>">Edit</button>

                                                        </button>
                                                        <a href="proses_budidaya/hapus_data_budidaya.php?id_budidaya=<?= $row['id_budidaya']; ?>"><button class="btn btn-danger">hapus</button></a>
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


    <script src="../template/theme/vendor/global/global.min.js"></script>
    <script src="../template/theme/js/quixnav-init.js"></script>
    <script src="../template/theme/js/custom.min.js"></script>



    <!-- Datatable -->
    <script src="../template/theme/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../template/theme/js/plugins-init/datatables.init.js"></script>


</body>

</html>