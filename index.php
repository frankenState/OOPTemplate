<?php 
include 'sys/helpers.php'; 
include 'sys/db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Connecting to Database</title>
	<?php echo css('bootstrap.min'); ?>
</head>
<body>
	<div class="container">
<?php 
	if (!$conn->connect_error){
		echo "Database connectivity established.";
	}

	$sql = 'SELECT * from doctor';

	$result = $conn->query($sql);

	//var_dump($result);
	// date_format(date_create($birthDate)
	if ($result->num_rows > 0){
	?>
	<table class="table table-sm table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Birth Date</th>
			<th>Gender</th>
			<th>Expertise</th>
		</tr>
	</thead>
	<tbody>
	<?php
		while ($row = $result->fetch_assoc()){
	?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['gender']; ?></td>
				<td><?php echo date_format(date_create($row['birthdate']), "F d, Y"); ?></td>
				<td><?php echo $row['expertise']; ?></td>
			</tr>
	<?php
		} // end of while
	?>
	</tbody>
	</table>
	<?php
	} // end of if

	echo "<br/>". date("F m, Y");
	$tz=timezone_open("Europe/Paris");
	echo "<br/>". timezone_name_get($tz);
?>

	</div>
	<?php echo js('jquery-3.4.1') ?>
</body>
</html>