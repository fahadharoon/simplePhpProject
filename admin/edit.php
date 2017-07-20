<?php include('header.php'); 
if(isset($_REQUEST['id'])){
	$Id=$_REQUEST['id'];

$query="select * from students where Id='$Id'";

$sql=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($sql);

if(isset($_POST['btn']))
{
	if(empty($_POST['Name'])||empty($_POST['RollNumber'])||empty($_POST['Course'])||empty($_POST['ObtainedMarks'])||empty($_POST['TotalMarks'])){

		$err="<p class='err'>Fill the required Fields</p>";
	}else
	{
		$Percentage=$_POST['ObtainedMarks']/$_POST['TotalMarks']*100;

		if($Percentage>=80){
			$Grade="A+";
		}elseif($Percentage>=70){
			$Grade="A";
		}elseif ($Percentage>=60) {
			$Grade="B";
		}elseif ($Percentage>=50) {
			$Grade="C";
		}elseif ($Percentage>=40) {
			$Grade="D";
		}else{
			$Grade="Fail";
		}

		$Update_Query="update students set Name='$_POST[Name]',RollNumber='$_POST[RollNumber]', Course='$_POST[Course]',ObtainedMarks='$_POST[ObtainedMarks]',TotalMarks='$_POST[TotalMarks]',Percentage='$Percentage',Grade='$Grade' where Id='$Id'";


		if(mysqli_query($con,$Update_Query))
		{
			echo "<script> window.location='all-record.php' </script>";
		}
	}
}




?>	

<div class="content_header">
 <h2> Edit Record</h2>
<hr>
</div>

<div class="content">
<form method="post" action="">
<table>
	<tr>
		<td>&nbsp;</td>
		<td>
			<?php 
             if(isset($_POST['btn'])){
             	if(isset($err)){echo "$err";}
             	if(isset($success)){echo "$success";}
             }else{
             	echo "<p>Fill the form</p>";
             }

			?>
		</td>
	</tr>
	<tr>
		<td>Student Name</td>
		<td><input type="text" name="Name" value="<?php echo $row['Name']; ?> "/> </td>
	</tr>
	<tr>
		<td>Roll Number</td>
		<td><input type="text" name="RollNumber" value="<?php echo $row['RollNumber']; ?> "/> </td>
	</tr>
	<tr>
		<td>Course</td>
		<td>
			<select name="Course">
				<option><?php echo $row['Course']; ?></option>
				<option>Internet Application Development</option>
				<option>Financial Accounting</option>
				<option>Parallel Computing</option>
				<option>Management Information System</option>
				<option>Entrepreneurship</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Total Marks</td>
		<td>
			<select name="TotalMarks">
		        <option><?php echo $row['TotalMarks']; ?></option>
				<option>100</option>
				<option>300</option>
				<option>500</option>

			</select>
		</td>
	</tr>
	<tr>
		<td>Obtained Marks</td>
		<td><input type="text" name="ObtainedMarks" value="<?php echo $row['ObtainedMarks']; ?> "/> </td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="btn" value="Update"></td>
	</tr>
</table>

	
</form>

<?php

}

?>

</div>	



<?php include('footer.php'); ?>