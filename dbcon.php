<?php
function opencon(){
	$db="products";
	$dbhost="127.0.0.1";
	$dbuser="root";
	$dbpass="";
	
	$conn = new mysqli($dbhost,$dbuser,$dbpass,$db) or die("failed to connect".$conn->error);
	
	return $conn;
	
}

function closecon($conn){
	$conn->close();
	
}





?>