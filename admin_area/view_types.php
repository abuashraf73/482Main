<table width="795" align="center" bgcolor="orange">
	<tr align="center">
		<td colspan="6"><h2>View All Types Here</h2><hr></td>
	</tr>
	<tr align="center" border="2" bgcolor="yellow">
		<th>Type id </th>
		<th>Type Name</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php
	include("includes/db.php");
	$get_type = "select * from types";
	$run_type = mysqli_query($con, $get_type);
	$i = 0;
	while($row_type = mysqli_fetch_array($run_type)){
	$type_id = $row_type['type_id'];
	$type_title = $row_type['type_title'];
	
	$i++;

	?>
	<tr align="center">
		<td><?php echo $i; ?></td>
		<td><?php echo $type_title; ?></td>
	
		<td><a href="index.php?edit_type=<?php echo $type_id; ?>">Edit</a></td> 
		<td><a href="delete_type.php?delete_type=<?php echo $type_id; ?>">Delete</a></td>
		<td></td>

	</tr>
	<?php
}
	?>
</table>