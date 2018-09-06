<?php
include_once('db.php');

$name=$_POST['name'];
$score=$_POST['score'];

 var_dump($_POST);

if(mysql_query("INSERT INTO scores VALUE('$name', '$score')"))
	echo "Successfully Inserted";
else
	echo "Insertion Failed"
?>


 