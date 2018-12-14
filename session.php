<!-- Edwin Lawisan 1606876790 -->

<?php
session_start();
if(empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true') {
	header('Location: login.php');
}
?>
