<!-- Edwin Lawisan 1606876790 --> 
<?php
	function connection(){
		$dbconnection = pg_connect("host=localhost dbname=postgres user=postgres password=12101998");
		return $dbconnection;
	}
?>
