<?php
session_start();
if (empty($_SESSION['id_login'])) {
  header("location:login.php");
}
?>
<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge"> 
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0"> 
	<title>Pemasaran Ikan</title> 
	<link rel="stylesheet"
		href="./penjual/style.css"> 
	<link rel="stylesheet"
		href="./penjual/responsive.css"> 
</head> 

<body> 
	
	<!-- for header part -->
	<header> 

		<div class="logosec"> 
			<div class="logo">Pemasaran Ikan</div> 
			<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon"> 
		</div> 

		<div class="searchbar"> 
			<input type="text"
				placeholder="Search"> 
			<div class="searchbtn"> 
			<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
					class="icn srchicn"
					alt="search-icon"> 
			</div> 
		</div> 

		<div class="message"> 
			<div class="circle"></div> 
			<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
				class="icn"
				alt=""> 
			<div class="dp"> 
			<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
					class="dpicn"
					alt="dp"> 
			</div> 
		</div> 

	</header> 

	<div class="main-container"> 
		<div class="navcontainer"> 
			<nav class="nav"> 
				<div class="nav-upper-options"> 
					<div class="nav-option option1"> 
						<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
							class="nav-img"
							alt="dashboard"> 
						<h3> Dashboard</h3> 
					</div> 

					<div class="option2 nav-option"> 
						<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
							class="nav-img"
							alt="Data Barang"> 
						<h3> Data Barang</h3> 
					</div> 

					<div class="nav-option option5"> 
						<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
							class="nav-img"
							alt="blog"> 
						<h3> Profile</h3> 
					</div> 

					<div class="nav-option option6"> 
						<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
							class="nav-img"
							alt="settings"> 
						<h3> Settings</h3> 
					</div> 

					<div class="nav-option logout"> 
						<img src= "https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
							class="nav-img"
							alt="logout.php"> 
              <a href="login.php"><h3>logout</h3></a>
						
					</div> 

				</div> 
			</nav> 
		</div> 
		<div class="main"> 

			<div class="searchbar2"> 
				<input type="text"
					name=""
					id=""
					placeholder="Search"> 
				<div class="searchbtn"> 
				<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
						class="icn srchicn"
						alt="search-button"> 
				</div> 
			</div> 

			<div class="box-container"> 

				<div class="box box1"> 
					<div class="text"> 
						<h2 class="topic-heading">60.5k</h2> 
						<h2 class="topic">Jumlah Stok</h2> 
					</div> 

					<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
						alt="Views"> 
				</div> 

				<div class="box box2"> 
					<div class="text"> 
						<h2 class="topic-heading">150</h2> 
						<h2 class="topic">Banyak Pembeli</h2> 
					</div> 

					<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png"
						alt="likes"> 
				</div> 

				<div class="box box3"> 
					<div class="text"> 
						<h2 class="topic-heading">320</h2> 
						<h2 class="topic">Rating</h2> 
					</div> 

					<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png"
						alt="comments"> 
				</div> 

				<div class="box box4"> 
					<div class="text"> 
						<h2 class="topic-heading">70</h2> 
						<h2 class="topic">Barang Terjual</h2> 
					</div> 

					<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published"> 
				</div> 
			</div> 

			<div class="report-container"> 
				<div class="report-header"> 
					<h1 class="recent-Articles">Transaksi Pembelian</h1> 
					<button class="view">View All</button> 
				</div> 

				<div class="report-body"> 
					<div class="report-topic-heading"> 
						<h3 class="t-op">Nama Barang</h3> 
						<h3 class="t-op">Jumlah Tersedia</h3> 
						<h3 class="t-op">Harga</h3> 
						<h3 class="t-op">Status</h3> 
					</div> 

					<div class="items"> 
						<div class="item1"> 
							<h3 class="t-op-nextlvl">Kerupuk Udang</h3> 
							<h3 class="t-op-nextlvl">12</h3> 
							<h3 class="t-op-nextlvl">Rp.20.000</h3> 
							<h3 class="t-op-nextlvl label-tag">Sudah Laku</h3> 
						</div> 

						<div class="item1"> 
							<h3 class="t-op-nextlvl">Ikan Kering</h3> 
							<h3 class="t-op-nextlvl">5</h3> 
							<h3 class="t-op-nextlvl">Rp.15.000</h3> 
							<h3 class="t-op-nextlvl label-tag">Sudah </h3> 
						</div> 




					</div> 
				</div> 
			</div> 
		</div> 
	</div> 

	<script src="./index.js"></script> 
</body> 
</html>
