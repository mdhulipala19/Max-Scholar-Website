<?php
include_once('db.php');

$name=$_POST['total'];
$age=$_POST['age'];

if(mysql_query("INSERT INTO user VALUE('$name', '$age')"))
	echo "Successfully Inserted";
else
	echo "Insertion Failed"
?>


 