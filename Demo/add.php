<?php 
	include("connect.php");
	$sql = "insert into student (std_name,std_surname,std_year) values ('".$_POST["std_name"]."','".$_POST["std_sur"]."','".$_POST["year"]."')";
	if ($conn->query($sql) == TRUE)
	{
		echo "Success";
	}
	else
	{
		echo "Fail :(";
	}
 ?>