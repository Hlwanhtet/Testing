<?php
	$servername = "localhost";
	$username = "userBuyAndSell";
	$password = "passBuyAndSell";
	$dbname = "dbbuyandsell";

	$connection = new mysqli($servername, $username, $password, $dbname);

	if($connection->connect_error) {
		echo $connection->connect_error;
	}
?>