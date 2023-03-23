<?php 
include('dbcon.php');

$cell_id = $_GET['cell_id'];

$query = mysql_query("SELECT * FROM cell_create WHERE zone_id = {$cell_id}");
while($row = mysql_fetch_array($query)) {
	echo "<option value='$row[cell_name]'>$row[cell_name]</option>";
}
?>