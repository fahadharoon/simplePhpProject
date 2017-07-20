<!DOCTYPE html>
<html>
<head>

<?php

include('../db/connect.php');






?>


<link rel="stylesheet" href="../admin/style.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>
<body class="bg">

<div class="container">



<?php


if(isset($_POST['btn']))
{
	// Write Query 
	$query="select * from admin where Name='$_POST[Name]' AND Password='$_POST[Password]'";

	// Run Query
	$sql = mysqli_query($con, $query);
	if(mysqli_num_rows($sql)>0)
	{
		$row=mysqli_fetch_assoc($sql);
		$_SESSION['user']=$row['Name'];
		echo "<script>window.location='dashboard.php'</script>";

	}

else 
{
	$err ="<p class='err'>Invalid user Name or Password</p>";
}

}


?>


<form method="post" action="" class="form-style1">

<?php
    if(isset($_POST['btn']))
    {
    	if(isset($err)){echo $err;}

    }
    else
    {
    	// echo "<p>Fill the required form</p>";
    }

    ?>


  <h3 style="color:white;" align="center">Login for Admin</h3>

  <label for=""></label>
  <input type="text" name="Name" id="" placeholder="Name" class="form-style2">
    
  <label for=""></label>
  <input type="password" name="Password" id="" placeholder="Password" class="form-style2">
    
  <button type="submit" name="btn" class="form-style3">Login</button>
    
</form>

</div>

</body>
</html>