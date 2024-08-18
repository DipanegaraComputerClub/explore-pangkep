<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rumah Laundry | Login</title>
	<link rel="stylesheet" href="assets/css/login.css">
	
	<style>
		.registrasi{
			color: white;
			font-size: 20pt;
		}
	</style>
</head>
<body>

	
	<div class="box">
		<div class="box-content">
			<div class="col box__left">
				<div class="logo">
					<img src="assets/img/logo/logo.png" alt="">
				</div>
				<div class="box__left-title">
					<h4>Login untuk akunmu</h4>
				</div>

				<div class="box__left-form">
					<form action="" method="post">
						<div class="box__left-form-group">
							<div class="input-form">
								<input type="text" name="username" id="username" placeholder="Username" required="true" >
							</div>
						</div>

						<div class="box__left-form-group">
							<div class="input-form">
								<input type="password" name="password" placeholder="Password" id="password" required="true">
							</div>
						</div>

						<div class="box__left-form-group">
							<button type="submit" name="login" class="btn-login mt-1">Login</button>
						</div>
					</form>
				</div>
			</div>

			<div class="col box__right">
				<div class="box__right-content">
					

					<!-- Bubble Variasi -->
					<div class="bubble-1"></div>
					<div class="bubble-2"></div>
					<div class="bubble-3"></div>
					<div class="bubble-4"></div>
					<div class="bubble-5"></div>
					<div class="bubble-6"></div>

					<!-- Garis Variasi -->
					<div class="garis garis-sm garis-1"></div>
					<div class="garis garis-md garis-2"></div>
					<div class="garis garis-sm garis-3"></div>
					<div class="garis garis-md garis-4"></div>
					<div class="garis garis-md garis-5"></div>
					<div class="garis garis-lg garis-6"></div>
					<div class="garis garis-lg garis-7"></div>
					<div class="garis garis-xl garis-8"></div>
					<div class="garis garis-sm garis-9"></div>
					<div class="garis garis-md garis-10"></div>
					<div class="garis garis-sm garis-11"></div>
					<div class="garis garis-md garis-12"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="copyright">
		<p>&copy; <span id="tahun"></span> All Rights Reserved.</p>
		<script>
		// mengambil tanggal hari ini
		var now = new Date();
		var tahun = now.getFullYear();
		// menampilkan tahun di dalam elemen HTML
		document.getElementById("tahun").innerHTML = tahun;
		</script>
	
	</div>

</body>
</html>


<?php
session_start();
if (isset($_POST['login'])) {

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }
    error_reporting(0);
    
    include "config/koneksi.php";
    $username = test_input($_POST['username'], ENT_QUOTES);
    $password = test_input($_POST['password'], ENT_QUOTES); {
    }
    $sql = "SELECT * FROM tbl_login where username='$username' and password = '$password'";
    $query = mysqli_query($conn, $sql);

    $mmm =  mysqli_num_rows($query);
    
    if ($mmm) {
        $kkk = mysqli_fetch_array($query, MYSQLI_ASSOC);
        $_SESSION['id_login'] = $kkk['id_login'];
        $_SESSION['akses'] = $kkk['akses'];

        if ($_SESSION['akses'] == 'admin') {
            header("Location: homeAdmin.php");
        }  
    } else {
        echo "<script> alert('Gagal login, username dan password salah!')</script>";
    }
}
?>