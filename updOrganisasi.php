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
			<?php 
            echo '<form method="post" action="detil_organisasi.php?id=' . $_GET["id"]. '" class="w3-container">';
            echo '<input id="id_organisasi" name="id_organisasi" type="hidden" value = ' . $row["id"] . ' class="w3-input w3-border w3-light-grey" required></p>';
            ?>
					<br>
					<p>
						<label class="w3-text-teal" for="nama_organisasi"><b>Nama Organisasi</b></label>
						<?php 
							echo '<input id="nama_organisasi" name="nama_organisasi" type="text" value = ' . $row["nama"] . ' class="w3-input w3-border w3-light-grey" required></p>';
						?>
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
					<?php 
						echo '<input class="w3-input w3-border w3-light-grey" id="email" name="email" type="text" value = "' .$row["email"]. '" class="validate" required></p>';
					?>
					<p>
					<label class="w3-text-teal" for="website"><b>Website</b></label>
					<?php 
						echo '<input class="w3-input w3-border w3-light-grey" id="website" name="website" type="text" value = "' .$row["alamat_website"]. '"></p>';
					?>
					<p>
					<label class="w3-text-teal" for="kontak_cp"><b>Kontak CP</b></label>
					<?php 
						echo '<input class="w3-input w3-border w3-light-grey" id="kontak_cp" name="kontak_cp" type="text" value = "' .$row["contact_person"]. '" required></p>';
					?>
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
					<?php 
						echo '<input class="w3-input w3-border w3-light-grey" id="urlLogo" name="urlLogo" value="' .$row["logo"]. '"type="text"></p>';
					?>
					<p>
					<label class="w3-text-teal" for="deskripsi"><b>Deskripsi</b></label>
					<?php 
						echo '<input class="w3-input w3-border w3-light-grey" id="deskripsi" name="deskripsi" type="text" value="' .$row["deskripsi"]. '" required></p>';
					?>
					<button class="w3-btn w3-teal" type="submit" name="update_organisasi">Submit</button></p>
			</form>
		</div>
	</div>
</body>
<?php
if (isset($_POST['update_organisasi'])) {
		$con = connection();
		
		$id = $_POST['id_organisasi'];
		$nama = $_POST['nama_organisasi'];
        $tingkatan = $_POST['tingkatan'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $kategori = $_POST['kategori'];
        $kontakcp = $_POST['kontak_cp'];
        $logo = $_POST['logo'];
		$deskripsi = $_POST['deskripsi'];
		
		$sql1 = "UPDATE SIMUI.PEMBUAT_EVENT SET nama = '$nama', email = '$email',alamat_website = '$website',tingkatan= 'Fakultas', kategori = '$kategori',logo = '$logo',deskripsi = '$deskripsi', contact_person = '$kontakcp' WHERE id = '$id'" ;
		
		if(pg_query($con,$sql1)){
                echo "<script type='text/javascript'>alert('Berhasil di update');
                window.location.href = 'detil_organisasi.php?id=' + $id;</script>";
                
            
        } else {
            echo pg_last_error();
        }
    
    }
?>
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