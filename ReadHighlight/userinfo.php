<?php
include_once('db.php');

$mainIdea=$_POST['mainIdea'];
$detail1=$_POST['detail1'];
$detail2=$_POST['detail2'];
$detail3=$_POST['detail3'];

//var_dump($_POST);

if(mysql_query("INSERT INTO outline VALUE('$mainIdea', '$detail1','$detail2','$detail3')"))
	echo "Good Job!";
else
	echo "Insertion Failed"

?>
