<!-- Edwin Lawisan 1606876790 --> 
<?php
	function connection(){
		$dbconnection = pg_connect("host=localhost dbname=basdattk user=basdat password=basdat123");
		return $dbconnection;
	}
?>
