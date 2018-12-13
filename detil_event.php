<!DOCTYPE html>
<html>
<head>
    <title>SIMUI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- bootstrap csss -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>

<body>

<?php
include 'navigationBar.php';
require "connect.php";
$dbconn = connection();
$id = $_GET["id"];
$task = "SELECT * FROM SIMUI.EVENT WHERE id_event =".$id.";";
$cek = "SELECT * FROM SIMUI.ORGANISASI WHERE id_organisasi ='".$id."';";
$result =  pg_query($dbconn, $task);
$cek_result =  pg_query($dbconn, $cek);
$row = pg_fetch_assoc($result);
$cek_row = pg_fetch_assoc($cek_result);
pg_close($dbconn);
$hasil_cek = 0;
//cek pembuat event
if ($cek_row !== ""){
	$hasil_cek = 1;
}
?>

<div class="container" style="margin-top: 40px;">
    <div class="jumbotron">
    	<?php
        	echo '<h1 class="display-4" style="color: dimgrey">'. $row["nama"] . '</h1>';
    		echo '<h3 class="display-6" style="color: dimgrey">EVENT ID : '. $row["id_event"] . '</h3>';
    	?>
    </div>
    <div class="row">
		<!--Right Side -->
		<div class="col-8 container">
			<div class="card-body">
				<h5 class="card-title">Event Makers ID</h5>
				<?php
				echo '<a href="#" >';
				echo '<h6 class="card-subtitle mb-2 text-muted" onclick="id_clicked('.$hasil_cek.', '.$row["id_pembuat_event"].')">'.$row["id_pembuat_event"].'</h6>';
				echo "</a>";
				?>
				</br>
				<h5 class="card-title">Kapasitas</h5>
				<?php
				echo '<h6 class="card-subtitle mb-2 text-muted">'.$row["kapasitas"].'</h6>';
				?>
				</br>
				<?php
				echo '<h6 class="card-subtitle mb-2 text-muted">'.$hasil_cek.'</h6>';
				?>
				</br>
				<h5 class="card-title">Deskripsi</h5>
				<?php
				echo '<h6 class="card-subtitle mb-2 text-muted">Rp.'.$row["deskripsi_singkat"].'</h6>';
				?>
			</div>
		</div>

		<!--Left Side -->
		<div class="col-4 card">
			<div class="card-body">
				<h5 class="card-title">Date & Time</h5>
				<?php
				echo '<h6 class="card-subtitle mb-2 text-muted">'.$row["waktu"].'</h6>';
				?>
				</br>
				<h5 class="card-title">Place</h5>
				<?php
				echo '<h6 class="card-subtitle mb-2 text-muted">'.$row["lokasi"].'</h6>';
				?>
				</br>
				<h5 class="card-title">Price</h5>
				<?php
				echo '<h6 class="card-subtitle mb-2 text-muted">Rp.'.$row["harga_tiket"].'</h6>';
				?>
			</div>
		</div>
	</div>	
</div>

<script>
id_clicked = function(kind, id){
	if(kind === 1){
		window.location.href = "detil_organisasi.php?id=" + id;
	}
	else if (kind === 0){
		window.location.href = "detil_kepanitiaan.php?id=" + id;
	}
}
</script>>

</body>
</html>