<?php
//calls the database
$mysqli = new mysqli('localhost', 'root', 'root', 'todo');
//$mysqli->connect_error then we want it to die and have this message
if ($mysqli->connect_error) {
	die('Connect Error (' . mysqli_>connect_errno . ')'
		. $mysqli->connect_error);
}
else{
	echo "Connection made";
}
$mysqli->close();
?>