<!-- Restow Frandha 1606877736 -->
<!DOCTYPE html>
<html>
<head>
    <title>SIMUI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</head>

<body>
    
<?php
session_start();
include 'navigationBar.php';
?>

<div class="w3-container">
	<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Delete Compfest</button>
		<div id ="id01" class="w3-modal">
			<div class="w3-modal-content w3-card-4" style="max-width:600px">
				<header class="w3-container w3-red" >
					<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-large w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
					<h2>Delete</h2>
				</header>
                <form  method="post" action="buatKepanitiaan.php" class="w3-container">
                    <select id="form1" class="w3-select" name="organisasinya" required>
						<option value="" disabled selected>Pilih Topik</option>
						<option value="BEM">BEM</option>
						<option value="DPM">DPM</option>
						<option value="Fakultas">Fakultas</option>
					</select>
                    <br>
                    <select id="form2" class="w3-select" name="fakultasnya" style ="display:none;">
						<option value="" disabled selected>Pilih Topik</option>
						<option value="BEM">BEM</option>
						<option value="DPM">DPM</option>
						<option value="Fakultas">Fakultas</option>
					</select>
                </form>
                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                    <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red ">Delete</button>
                    <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-grey ">Cancel</button>
                </div>
			</div>
		</div>
    </div>
</body>
</html>
<script>

$(document).ready(function(){
    $('#form1').change(function(){
        if($('#form1').val() == "Fakultas"){
           $('#form2').show();
        } else {
            $('#form2').hide();
        }
    });
});
</script>