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
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

<?php
include 'navigationBar.php';
require "connect.php";
$dbconn = connection();
$id = $_GET["id"];
$task = "SELECT p.*, k.id_organisasi FROM SIMUI.PEMBUAT_EVENT p, SIMUI.KEPANITIAAN k WHERE p.id=k.id_kepanitiaan and k.id_kepanitiaan ='" .$id."';";
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
				<h5 class="card-title">Organization Id</h5>
				<?php
				echo '<a href="detil_organisasi.php?id=' .$row["id_organisasi"]. '">';
				echo '<h6 class="card-subtitle mb-2 text-muted">'.$row["id_organisasi"].'</h6>';
				echo '</a>';
				?>
				</br>
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
				<button onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-gray w3-medium">Update Comitte</button>
				<?php
					include 'updButton.php';
				?>
				<p></p>

				<form method="POST" action="tampilkanKepanitiaan.php">
					<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
					<button name="delete_button" class="w3-button w3-red w3-medium" type="submit">Delete</button>
				</form>
				
			</div>
		</div>
	</div>	
	
</div>

</body>
<?php
	if (isset($_POST['delete_button'])) {    
        $conecti = connection();
		$id = $_POST['id'];
		$sql1 = "DELETE FROM simui.pembuat_event WHERE id = '$id'" ;
		if(pg_query($conecti,$sql1)){
			echo "<script type='text/javascript'>alert('Berhasil di update')</script>";
        } else {
			echo "<script type='text/javascript'>alert('Gagal hapus')</script>";
        }
    
    }			
?>
</html>