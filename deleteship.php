<?php

// Process delete operation after confirmation
    // Include config file
    require_once "connection.php";
 if (isset($_GET['id'])) {
	$id = $_GET['id'];
	mysqli_query($db, "DELETE FROM ships WHERE id=$id");
	echo "<script>alert('Deleted Successfully')</script>";
	header('Location: updateshiping.php');
	
	}
	
?>