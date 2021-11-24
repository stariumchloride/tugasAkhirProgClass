<?php
include 'functions.php';
// Your PHP code here.

// Home Page template below.
?>

<?=template_header('Home')?>

<div class="content">
	<div class="container my-5">
		<h1>Selamat Datang Di Film Pemersatu Bangsa</h1>
	
		<div class="col-md-12 mt-3">
			<div class="row">
				<div class="col-md-4">
					<div class="card" style="width: 18rem;">
						<img class="card-img-top" src="img/img-4.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Sinopsis</h5>
							<p class="card-text">Melanjutkan Avengers Infinity War, dimana kejadian setelah Thanos berhasil mendapatkan semua infinity stones dan memusnahkan 50% semua mahluk hidup di alam semesta. Akankah para Avengers berhasil mengalahkan Thanos?</p>
							<a href="create.php" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="width: 18rem;">
						<img class="card-img-top" src="img/img-5.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Sinopsis</h5>
							<p class="card-text">Sancaka hidup di jalanan sejak ditinggal ayah dan ibunya. Menghadapi hidup yang keras, Sancaka belajar untuk bertahan hidup dengan tidak peduli dengan orang lain dan hanya mencoba untuk mendapatkan tempat yang aman bagi dirinya sendiri. Ketika situasi kota semakin tidak aman dan ketidakadilan merajalela di seluruh negeri, Sancaka harus buat keputusan yang berat, tetap hidup di zona amannya, atau keluar sebagai Gundala untuk membela orang-orang yang ditindas.</p>
							<a href="create.php" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="width: 18rem;">
						<img class="card-img-top" src="img/img-3.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Sinopsis</h5>
							<p class="card-text">Mengikuti kisah Risa yang bisa berkomunikasi dengan hantu. Masalah timbul saat sang adik, Riri, secara misterius hilang tanpa jejak. Ia pun meminta bantuan pada teman-teman hantunya untuk mencarinya.</p>
							<a href="create.php" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<?=template_footer()?>