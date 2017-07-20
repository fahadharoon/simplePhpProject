<?php

include('header.php');


?>
<div class="content_header">
 <h2> Add Record</h2>
<hr>
</div>

<div class="content">
<?php
if(isset($_POST['btn'])){
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
		$query="insert into students values('','$_POST[Name]','$_POST[RollNumber]','$_POST[TotalMarks]','$_POST[ObtainedMarks]','$Percentage','$Grade','$_POST[Course]')";
		if(mysqli_query($con,$query)){
			$success="<p class='success'>Record has been submitted</p>";
		}
	}
}

?>


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
		<td><input type="text" name="Name"> </td>
	</tr>
	<tr>
		<td>Roll Number</td>
		<td><input type="text" name="RollNumber"></td>
	</tr>
	<tr>
		<td>Course</td>
		<td>
			<select name="Course">
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
				<option>100</option>
				<option>50</option>
				<option>30</option>

			</select>
		</td>
	</tr>
	<tr>
		<td>Obtained Marks</td>
		<td><input type="text" name="ObtainedMarks"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="btn" value="Add Record"></td>
	</tr>
</table>

	
</form>
	
</div>


<?php include('footer.php'); ?>