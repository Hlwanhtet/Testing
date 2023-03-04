<?php
	echo "<html> ";
	echo "<head> ";
	echo '<meta charset="utf-8"> ';
	echo "<title>Buy and Sell Website - Search Item</title> ";
	echo '<link href="../css/styles.css" type="text/css" rel="stylesheet"> ';
	echo "<script ";
	echo 'src="https://code.jquery.com/jquery-3.3.1.js" ';
	echo 'integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" ';
	echo 'crossorigin="anonymous"></script> ';
	echo "</head> ";
	echo "<body> ";
	echo "<header> ";
	echo "<nav> ";
	echo "<ul> ";
	echo '<li><a href="../SellItemPage/SellItem.html">Sell Item</a></li> ';
	echo '<li><a href="../BuyItemPage/BuyItem.html">Buy Item</a></li> ';
	echo '<li style="background-color: coral;"><a href="../SearchItemPage/SearchItemDAO.php">Search Item</a></li> ';
	echo "</ul> ";
	echo "</nav> ";
	echo "</header> ";
	echo "<section> ";
	echo '<h1>Welcome <span id="nameField"></span>!</h1> ';
	echo "<h1>Search for an item by name...</h1> ";
	echo '<form action="./SearchItemDAO.php" method="get"> ';
	echo "<label>Search</label> ";
	echo '<input type="text" id="txtSearchValue" name="searchValue"> ';
	echo "<br> ";
	echo "<br> ";
	echo '<input id="submit" type="submit" value="Submit"> ';
	echo "</form> ";
	echo '<section id="searchResults"> ';
					
				
	searchItems();
	// Run show Item function
	function searchItems() {
		include "../include/config.php";
		$searchValue = $_GET['searchValue'];
		if ($searchValue != "") {
			$sql = "SELECT * FROM `tbl_item` ".
				" WHERE ".
				" ITEM_NAME = '$searchValue'";
			//echo $sql; 
			
			echo "Your search item " . $searchValue . " has the following matches. <br> ";
			
			$res = mysqli_query($connection, $sql);
			while($row = mysqli_fetch_array($res)) {
				echo '<br>' . $row[0] . ' -- ' . $row[1] . ' -- ' . $row[2] . ' -- ' . $row[3] . ' -- ' . $row[4];
			};
		}
		
		
	}
	

	echo '</section> ';
	echo "</section> ";
	echo "</body> ";
	echo "</html> ";

	// Run add name function
	function addName() {
		session_start();
		$fnln = $_SESSION['fnln'];
		echo $fnln;
	}
?>