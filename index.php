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

	if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
			#echo "<br/>{$row['name']}";
			echo "<br/>".$row['name'];
		}
	}
?>

	</div>
	<?php echo js('jquery-3.4.1') ?>
</body>
</html>