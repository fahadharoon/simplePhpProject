<?php include('db/connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="admin/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body class="background">

<header>
	<div class="container">
		
	</div>
</header>
<main>
	<div class="container">
	<?php   

	if(isset($_POST['btn']))
	{
		if(empty($_POST['RollNumber']))
		{
			$err="Fill the required Fields";
		}
		else
		{
			$query="select * from students where RollNumber='$_POST[RollNumber]'";

			$sql=mysqli_query($con,$query);
			if(mysqli_num_rows($sql)>0)
			{
				$row=mysqli_fetch_assoc($sql);

				?>

				<table border="1" cellpadding="5" cellspacing="0" class="table" style="text-align:center;">
				<tr >
					<th scope="col" style="text-align:center;"><b>Name</b></th>
					<th scope="col" style="text-align:center;">RollNumber</th>
					<th scope="col" style="text-align:center;">Course</th>
					<th scope="col" style="text-align:center;">Obtained Marks</th>
					<th scope="col" style="text-align:center;">Percentage</th>
					<th scope="col" style="text-align:center;">Grade</th>
					
				<tr>	
				<tr>
				<td><?php echo $row['Name']; ?></td>
				<td><?php echo $row['RollNumber']; ?></td>
				<td><?php echo $row['Course']; ?></td>
				<td><?php echo $row['ObtainedMarks']."/".$row['TotalMarks']; ?></td>
				<td><?php echo $row['Percentage']; ?></td>
				<td><?php echo $row['Grade']; ?></td>
				</tr>
				</table>






			<?php	

			}
			else
			{
				$result="No Record Found";
			}
		}
	}




	?>




	<form method="post" action="" class="form-style6">
		<table>
			<tr>
				<td></td>
				<td>
					<?php 
					if(isset($err))
					{
						echo $err;
					}

					if(isset($result))
					{
						echo $result;
					}
					?>
				</td>		
			</tr>
			<tr>
				<h4 align="center" style="color:white; font-size:17px;">Enter Your Roll Number</h4>
				<td><input type="texr" name="RollNumber" class="form-style4" placeholder="Enter Your RollNumber"></td>		
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btn" value="Search" class="form-style5"></td>		
			</tr>
		</table>
		</form>
	</div>
</main>

<footer></footer>

</body>
</html>