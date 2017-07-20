<?php include('header.php'); ?>


<div class="content_header">
 <h2> All Record</h2>
<hr>
</div>

<div class="content">

<table border="1" cellpadding="5" cellspacing="0" >
	<tr >
		<th style="text-align:center;">S.No</th>
		<th style="text-align:center;" >Name</th>
		<th style="text-align:center;">Roll Number</th>
		<th style="text-align:center;">Course</th>
		<th style="text-align:center;">Marks</th>
		<th style="text-align:center;">Percentage</th>
		<th style="text-align:center;">Grade</th>
		<th style="text-align:center;">Action</th>	
		
	</tr>


	<?php 
$query="select * from students";
$sql=mysqli_query($con,$query);
if(mysqli_num_rows($sql)>0){
	$i=1;
	while($row=mysqli_fetch_assoc($sql)) {
			?>
	<tr style="border:2px solid black" align="center">
		<td style="border:1px solid black;"><?php echo $i++; ?></td>
		<td style="border:1px solid black;"><?php echo $row['Name']; ?></td>
		<td style="border:1px solid black;"><?php echo $row['RollNumber']; ?></td>
		<td style="border:1px solid black;"><?php echo $row['Course']; ?></td>
		<td style="border:1px solid black;"><?php echo $row['ObtainedMarks']."/".$row['TotalMarks']; ?></td>
		<td style="border:1px solid black;"><?php echo $row['Percentage']; ?></td>
		<td style="border:1px solid black;"><?php echo $row['Grade']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $row['Id'] ;  ?>">Edit</a>
			<a href="delete.php?id=<?php echo $row['Id']; ?>">Delete</a>
		</td>
		
	</tr>
 	
 	<?php 
 }



}else{

$numrecord= "No Records Found";
}

	?>
		

</table>


<?php
if(isset($numrecord)) { echo $numrecord;}
?>

<?php include('footer.php'); ?>