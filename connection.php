<?php
session_start();
$db = mysqli_connect("localhost","root","","cms");

if(!$db)
{
	echo "Database connection failed...";
}

?>