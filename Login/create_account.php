<?php
include_once('db.php');


$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$email=$_POST['email'];
$email2=$_POST['email2'];

$username=$_POST['username'];
$password=$_POST['password'];
$password2=$_POST['password2'];



//var_dump($_POST);

if(!($email==$email2))
{
	$message = "Email fields do not match.";
	echo "<script type='text/javascript'>;
			alert('$message');
	        window.location.replace(\"../Login\");
	        </script>";

	        exit();
}


if(!($password==$password2))
{
	$message = "Password fields do not match.";
	echo "<script type='text/javascript'>;
			alert('$message');
	        window.location.replace(\"../Login\");
	        </script>";

	        exit();
}



$sql = "SELECT * FROM users WHERE username='".$username."'";
$result = mysql_query($sql);
$num_rows = mysql_num_rows($result);

$sql2 = "SELECT * FROM users WHERE email='".$email."'";
$result2 = mysql_query($sql2);
$num_rows2 = mysql_num_rows($result2);


if ($num_rows> 0 || $num_rows2>0) {

	if ($num_rows> 0) {

	$message = "Username taken.";
	echo "<script type='text/javascript'>;
			alert('$message');
	        window.location.replace(\"../Login\");
	        </script>";
	} 
	if ($num_rows2> 0) {

	$message = "There already exists an account with this email address. ";
	echo "<script type='text/javascript'>;
			alert('$message');
	        window.location.replace(\"../Login\");
	        </script>";
	}                 

}



else {

    if(mysql_query("INSERT INTO users VALUE('$FirstName','$LastName','$email','$username', '$password')"))
    {
		    $message = "Account successfully created! Please log in.";
			echo "<script type='text/javascript'>;
					alert('$message');
			        window.location.replace(\"../Login\");
			        </script>";
	 
    }
}


?>
