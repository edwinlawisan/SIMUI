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
$task = "SELECT p.* FROM SIMUI.PEMBUAT_EVENT p, SIMUI.ORGANISASI o WHERE p.id=o.id_organisasi and o.id_organisasi ='" .$id."';";
$result =  pg_query($dbconn, $task);
$row = pg_fetch_assoc($result);	
pg_close($dbconn);

?>

<div class="container" style="margin-top: 40px;">
    <div class="jumbotron">
    	<?php
        	echo '<h1 class="display-4" style="color: dimgrey">'. $row["nama"] . '</h1>';
    		echo '<h3 class="display-6" style="color: dimgrey">ID : '. $row["id"] . '</h3>';
    	?>
    </div>
    <div class="row">
		<!--Right Side -->
		<div class="col-8 container">
			<div class="card-body">
				<h5 class="card-title">Level</h5>
				<?php
				echo '<h6 class="card-subtitle mb-2 text-muted">'.$row["tingkatan"].'</h6>';
				?>
				</br>
				<h5 class="card-title">Category</h5>
				<?php
				echo '<h6 class="card-subtitle mb-2 text-muted">'.$row["kategori"].'</h6>';
				?>
				</br>
				<h5 class="card-title">Deskripsi</h5>
				<?php
				echo '<h6 class="card-subtitle mb-2 text-muted">'.$row["deskripsi"].'</h6>';
				?>
			</div>
		</div>

		<!--Left Side -->
		<div class="col-4 card">
			<div class="card-body">
				<h5 class="card-title">Contact Person</h5>
				<?php
				echo '<h6 class="card-subtitle mb-2 text-muted">'.$row["contact_person"].'</h6>';
				?>
				</br>
				<h5 class="card-title">E-mail</h5>
				<?php
				echo '<h6 class="card-subtitle mb-2 text-muted">'.$row["email"].'</h6>';
				?>
				</br>
				<h5 class="card-title">Website</h5>
				<?php
				echo '<h6 class="card-subtitle mb-2 text-muted">'.$row["alamat_website"].'</h6>';
				?>
			</div>
		</div>
	</div>	
</div>

</body>
</html>