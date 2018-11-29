<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
	<?php include 'navigationBar.php'; ?>
	<div class="w3-container">
		<div class="w3-container">
			<div class="w3-container w3-teal">
				<h1>Buat Organisasi</h1>
			</div>
			<form method="post" action="buatOrganisasi.php" class="w3-container w3-padding-16">
				<div class="w3-container">
					<div id="nama_organisasi_container" class="input-field col s12">
						<input id="nama_organisasi" name="nama_organisasi" type="text" class="validate" required>
						<label for="nama_organisasi">Nama Organisasi</label>
						
					</div>
				</div>
				<div class="w3-container" >
					<div class="input-field col s12">
						<select name="tingkatan" required>
							<option value="tingkatan" selected disabled>Tingkatan</option>
							<option value="univ">UI</option>
							<option value="fakultas" disabled>Tingkatan Fakultas
								<option value="fasilkom">Fakultas - Ilmu Komputer</option>
								<option value="fmipa">Fakultas - Matematika & IPA</option>
								<option value="fisip">Fakultas - Ilmu Sosial & Politik</option>
							</option>
						</select>
						<label>Tingkatan</label>
					</div>
				</div>
				<div class="w3-container">
					<div class="input-field col s12">
						<input id="judul" name="judul" type="text" class="validate" required="">
						<label for="judul">Email</label>
					</div>
				</div>
				<div class="w3-container">
					<div class="input-field col s12">
						<input id="tags" name="tags" type="text" class="validate" required>
						<label for="tags">Website</label>
					</div>
				</div>
				<div class="w3-container">
					<div class="input-field col s12">
						<input id="jumlah_kata" name="jumlah_kata" type="text" class="validate" required>
						<label for="jumlah_kata">Kontak CP</label>
					</div>
				</div>
				<div class="w3-container">
					<div class="input-field col s12">
						<select name="tingkatan" required>
							<option value="tingkatan" disabled selected>Kategori</option>
							<option value="univ">Sosial</option>
							<option value="fakultas">Pengmas</option>
						</select>
						<label>Kategori</label>
					</div>
				</div>
				<div class="w3-container">
					<div class="w3-container">
						<label>Logo</label>
					</div>
					<div class="w3-container">
						<input id="jumlah_kata" name="jumlah_kata" type="file" class="validate" required>
					</div>
				</div>
				<div class="w3-container">
					<div class="input-field col s12">
						<input id="id_universitas" name="id_universitas" type="text" class="validate" required>
						<label for="id_universitas">Deskripsi</label>
					</div>
				</div>
				<div class="w3-container">
					
						<div class="input-field col s12">
							<button class="btn waves-effect waves-light" type="submit" name="add_new_news">Submit
								<i class="material-icons right">send</i>
							</button>
						</div>
					
				</div>
			</form>
		</div>
	</div>
	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/customize.js"></script>
</body>
</html>
<?php
if (isset($_POST['add_new_news'])) {
	$db = pg_connect("host=dbpg.cs.ui.ac.id dbname=db036 user=db036 password=Hie7Acai");
	$url_berita = $_POST['url_berita'];
	$judul = $_POST['judul'];
	$topik = $_POST['topik'];
	$tags = $_POST['tags'];
	$jumlah_kata = $_POST['jumlah_kata'];
	$id_universitas = $_POST['id_universitas'];
	$sql = "INSERT INTO bmnc.berita VALUES('$url_berita','$judul','$topik','now','now',$jumlah_kata,0,$id_universitas)";
	if (pg_query($db,$sql)) {
		echo "Data entered successfully. ";
	}else {
		echo "Failed";
		echo "errornya ".pg_last_error(); 
	}

}
?>