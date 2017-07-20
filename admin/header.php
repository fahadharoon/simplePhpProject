<?php

include('../db/connect.php');
if(empty($_SESSION['user']))
{
	echo "<script> window.location='index.php'</script>";
}
?>



<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="../admin/style.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
	 
</head>
<body >



      <header>

    <!-- <div class="navbar navbar-default navbar-fixed-top navbar-inverse">
    	<div class="container">
    		<div class="navbar-header">
    		<button  class="navbar-toggle" type="button" data-toggle="collapse" data-target="#example" >
    			<span class="icon-bar"></span>
    			<span class="icon-bar"></span>
    			<span class="icon-bar"></span>

    		</button>
    			<a href="" class="navbar-brand">Admin</a>
    		</div>
    		<div class="collapse navbar-collapse" id="example">
    			<ul class="nav navbar-nav">
    				<li><a href="dashboard.php">Dashboard</a></li>
    				<li><a href="add-record.php">Add Record</a></li>
    				<li><a href="">Update Record</a></li>
    				<li><a href="">Delete record</a></li>
    				<li><a href="">All Record</a></li>
    				<li><a href="">Logout</a></li>
    				
    			</ul>
    			
    			
    		</div>
    	</div>
    </div>


 -->
<!--  <div id="wrapper">

       
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="dashboard.php">Dashboard</a>
                </li>
                <li>
                    <a href="add-record.php">Add Record</a>
                </li>
                <li>
                    <a href="#">Update Record</a>
                </li>
                <li>
                    <a href="#">Delete record</a>
                </li>
                <li>
                    <a href="#">All Record</a>
                </li>
                <li>
                    <a href="#">Logout</a>
                </li>
                
            </ul>
        </div>
        </div> -->

<ul id="sidebar" class="nav nav-pills nav-stacked" style="max-width:25%"; >
    <li class="active"><a href="dashboard.php"><span class="glyphicon glyphicon-off"></span>  Dashboard</a></li>
    <li><a href="add-record.php">  Add Record</a></li>
   <!--  <li><a href="edit.php">  Update Record</a></li>
    <li><a href="delete.php">  Delete record</a></li> -->
    <li><a href="all-record.php">  All Record</a></li>
    <li><a href="logout.php">  Logout</a></li>
    
   
</ul>

     
    </header>

</body>
</html>