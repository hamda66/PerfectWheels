<?php
function opencon(){
	$db="products";
	$dbhost="sql11.freemysqlhosting.net";
	$dbuser="sql11455306";
	$dbpass="QirPAhKG7Q";
	
	$conn = new mysqli($dbhost,$dbuser,$dbpass,$db) or die("failed to connect".$conn->error);
	
	return $conn;
	
}

function closecon($conn){
	$conn->close();
	
}





?>
