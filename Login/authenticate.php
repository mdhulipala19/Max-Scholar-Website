<?php
session_start();

include_once('db.php');

$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);


//var_dump($_POST);

// if(mysql_query("SELECT * FROM users WHERE username='$username'"))
// 	echo "Account Created!";
// else
// 	echo "Please try again."




$sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."'";
$result = mysql_query($sql);
//$result = mysql_query("SELECT COUNT(*) from(SELECT * FROM users WHERE username=$username AND password=$password)src;");

$num_rows = mysql_num_rows($result);

// echo "$num_rows Rows\n";




if ($num_rows> 0) {

$_SESSION['username'] = $username;

 header('Location: ../WelcomeDyslexia');
 exit();

} else {
    echo "Login Failed";
}


?>
