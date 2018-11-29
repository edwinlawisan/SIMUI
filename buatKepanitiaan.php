<!-- Restow Frandha 1606877736 -->
<!DOCTYPE html>
<html>
<head>
    <title>SIMUI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</head>

<body>
    
<?php
session_start();
include 'navigationBar.php';
?>

  <div class = "container">  
    <div class="row">
			<form method="post" action="buatKepanitiaan.php" class="col s12">
				<?php include('errors.php'); ?>
				<div class="row">
					<div id="nama_kepanitiaan_container" class="input-field col s12">
						<input id="nama_kepanitiaan" name="nama_kepanitiaan" type="text" class="validate" required>
						<label for="nama_kepanitiaan">Nama Panitia</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
                        <select name="organisasinya" required>
							<option value="" disabled selected>Pilih Topik</option>
							<option value="BEM">BEM</option>
							<option value="DPM">DPM</option>
							<option value="Ristek">Ristek</option>
						</select>
						<label>Organisasi yang membawahi</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
                       <input id="email" name="email" type="text" class="validate" required>
                       <label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="website" name="website" type="text" class="validate" required>
						<label for="website">Website</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="kontak_cp" name="kontak_cp" type="text" class="validate" required>
						<label for="kontak_cp">Kontak CP</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
                        <select name="kategori" required>
							<option value="" disabled selected>Pilih Topik</option>
							<option value="Olahraga">Olahraga</option>
							<option value="Seni">Seni</option>
							<option value="StandUpComedy">Stand Up Comedy</option>
						</select>
						<label for="kategori">Kategori</label>
					</div>
				</div>

                <div class="row">
					<div class="input-field col s12">
                        <div class="input-field col s12">
                        <input id="logo" name="logo" type="file" class="validate" required>
                        <label for="logo">Logo</label>
                        </div>
					</div>
				</div>

                <div class="row">
					<div class="input-field col s12">
                        <div class="input-field col s12">
                        <input id="deskripsi" name="deskripsi" type="text" class="validate" required>
                        <label for="deskripsi">Deskripsi</label>
                        </div>
					</div>
				</div>

				<div class="row">
					<div class="row">
						<div class="input-field col s12">
							<button class="btn waves-effect waves-light" type="submit" name="buat_kepanitiaan">Submit
								<i class="material-icons right">send</i>
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
  </div>

</body>