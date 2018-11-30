<!DOCTYPE html>
<html>
<head>
	<title>SIMUI</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>	
</head>

<body>
	<?php 
	include 'navigationBar.php'; ?>
<div class="container w3-padding-32" style="max-width:600px">
		<div class="w3-container" style = "width:100%;">
				<div class="w3-container w3-teal w3-card-4">
					<h1>Update Organisasi</h1>
				</div>
			<form method="post" action="buatOrganisasi.php" class="w3-container w3-card-4">
					<br>
					<p>
						<label class="w3-text-teal" for="nama_organisasi"><b>Nama Organisasi</b></label>
						<input class="w3-border w3-input w3-light-grey " id="nama_organisasi" name="nama_organisasi" type="text" value="BEM Fasilkom UI" class="validate" required>
					</p>
					<p>
						<label class="w3-text-teal"><b>Tingkatan</b></label>
						<select id="form1" class="w3-select" name="tingkatan" required>
							<option value="" disabled>Tingkatan</option>
							<option value="univ">UI</option>
							<option value="Fakultas" selected>Fakultas</option>
						</select>
						<select id="form2" class="w3-select" name="tingkatFakultas" style="display:none;">
							<option value="" disabled>Nama Fakultas</option>
							<option value="fasilkom" selected>Fakultas Ilmu Komputer</option>
							<option value="fmipa">Fakultas Matematika & IPA</option>
							<option value="fisip">Fakultas Ilmu Sosial & Politik</option>
							<option value="ft">Fakultas Teknik</option>
							<option value="fh">Fakultas Hukum</option>
							<option value="Fib">Fakultas Ilmu Budaya</option>
						
						</select>
						
					</p>
					<p>
					<label class="w3-text-teal" for="email"><b>Email</b></label>
					<input class="w3-input w3-border w3-light-grey" id="email" name="email" type="text" value="bem@gmail.com" class="validate" required></p>
					<p>
					<label class="w3-text-teal" for="website"><b>Website</b></label>
					<input class="w3-input w3-border w3-light-grey" id="website" name="website" type="text" value="bem.cs.ui.ac.id" class="validate"></p>
					<p>
					<label class="w3-text-teal" for="kontak_cp"><b>Kontak CP</b></label>
					<input class="w3-input w3-border w3-light-grey" id="kontak_cp" name="kontak_cp" type="text" value="083181818109" class="validate" required></p>
					<p>
					<label class="w3-text-teal" for="kategori"><b>Kategori</b></label>
					<select class="w3-select" name="kategori" required>
						<option value="" disabled>Pilih Topik</option>
						<option value="Olahraga" selected>Olahraga</option>
						<option value="Seni">Seni</option>
						<option value="StandUpComedy">Stand Up Comedy</option>
					</select></p>
					<p>
					<label class="w3-text-teal" for="logo"><b>Logo</b></label>
					<input class="w3-input w3-border w3-light-grey" id="logo" name="logo" type="file" class="validate"></p>
					<p>
					<label class="w3-text-teal" for="deskripsi"><b>Deskripsi</b></label>
					<input class="w3-input w3-border w3-light-grey" id="deskripsi" name="deskripsi" type="text" value="Badan eksekutif mahasiswa di fasilkom" class="validate" required></p>
					<button class="w3-btn w3-teal" type="submit" name="buat_kepanitiaan">Submit</button></p>
			</form>
		</div>
	</div>
</body>
</html>

<script>
$(document).ready(function(){
	$('#form1').change(function(){
		if($('#form1').val() == "Fakultas"){
			$('#form2').show();
		}
		else{
			$('#form2').hide();
		}
	});
});
</script>