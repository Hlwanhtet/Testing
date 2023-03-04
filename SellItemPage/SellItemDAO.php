<?php

	if($_POST['phpfunction'] == 'addItem') {
		addItem();
	}

	function addItem() {
		
		$itemCategory = $_POST['itemCategory'];
		$itemName = $_POST['itemName'];
		$itemDescription = $_POST['itemDescription'];
		$price = $_POST['price'];
		
		session_start();
		$uName = $_SESSION['uName'];
		
		include "../include/config.php";
		
		$sql = "INSERT INTO `tbl_item`".
			   " values ".
			   "('$itemCategory', '$itemName', '$itemDescription', '$price', '$uName')";
		
		//echo $sql;
		
		if(mysqli_query($connection, $sql)) {
			echo "true";
		} else {
			echo mysqli_error($connection);
			return;
		}
		
		mysqli_close($connection);
	} 

?>