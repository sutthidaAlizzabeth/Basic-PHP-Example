<?php 
	include("connect.php");
	$id = $_POST["id"];
	$name = $_POST["std_name"];
	$sur = $_POST["std_sur"];
	$year = $_POST["year"];
	$sql = "update student set std_name = '". $name . "', std_surname = '" . $sur . "', std_year = '" . $year . "' where std_id = '" . $id . "'";
	if ($conn->query($sql) == TRUE)
	{
		echo "Success";
	}
	else
	{
		echo "Fail :(";
	}
 ?>