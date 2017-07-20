<?php

include('../db/connect.php');

if(isset($_REQUEST['id']))
{
	$Id=$_REQUEST['id'];

	$query="delete from students where Id='$Id'";
	mysqli_query($con,$query);
	echo "<script> window.location='all-record.php' </script>";
}


?>