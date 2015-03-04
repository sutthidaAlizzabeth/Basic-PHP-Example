<?php include("connect.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New Student</title>
</head>
<body>
<?php 
	$sql = "select * from student where std_name = ".$_GET["std_name"];
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
	}
	else
	{
		echo "Fail";
	}
 ?>
	<form action="edit2.php" method="post">
		Student Name : <input type="text" name="std_name" value="<?=$_GET["std_name"] ?>"><br/>
		Student Surname : <input type="text" name="std_sur" value="<?=$_GET["std_sur"] ?>"><br/>
		Student Year : <input type="number" max="4" min="1" name="year" value="<?=$_GET["year"] ?>"><br/>
		<input type="hidden" name="id" value="<?=$_GET["id"] ?>">
		<input type="submit">
	</form>
</body>
</html>