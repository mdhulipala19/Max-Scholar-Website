 <?php
 session_start();
include_once('db.php');

$name=$_POST['name'];
$score=$_POST['score'];

//var_dump($_POST);

$username = $_SESSION['username'];

if(mysql_query("INSERT INTO scores VALUE('$username', '$score')"))
	echo "Successfully Inserted";
else
	echo "Insertion Failed"

?>


 