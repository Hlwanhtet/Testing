<?php

	if($_POST['phpfunction'] == 'getMyItems') {
		getMyItems();
	}
	
	if($_POST['phpfunction'] == 'getItemsToBuy') {
		getItemsToBuy();
	}

	function getMyItems() {

		session_start();
		$uName = $_SESSION['uName'];
		
		$sql = 	"SELECT * FROM tbl_item WHERE Owner_Email='".$uName."'";
		//echo $qry;
		
		include "../include/config.php";
		$res = mysqli_query($connection, $sql);
		
		while( $row = mysqli_fetch_array( $res ) ) {
			$json[] = $row;
		}
		
		echo json_encode($json);
	}	
	
	function getItemsToBuy() {

		session_start();
		$uName = $_SESSION['uName'];
		
		$sql = 	"SELECT * FROM tbl_item WHERE Owner_Email!='".$uName."'";
		//echo $qry;
		
		include "../include/config.php";
		$res = mysqli_query($connection, $sql);
		
		while( $row = mysqli_fetch_array( $res ) ) {
			$json[] = $row;
		}
		
		echo json_encode($json);
	}	

?>