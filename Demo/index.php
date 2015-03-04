<?php

	include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Demo PHP</title>
</head>
<body>
	<a href="add.html">Create new Student</a>
	<br><br>
<?php
	$sql = "select * from student";
	$result = $conn->query($sql);

	if($result->num_rows > 0)
	{
		while ($row = $result->fetch_assoc()) {
			echo $row["std_id"].") ";
			echo $row["std_name"]." ";
			echo $row["std_surname"]."  <a href='edit.php?std_name=" . $row["std_name"] . "&std_sur=". $row["std_surname"]. "&year=". $row["std_year"] ."&id=".$row["std_id"] ."'>edit.php</a><br>";
		}
	}
	else
	{
		echo "0 result";
	}

?>
</body>
</html>
