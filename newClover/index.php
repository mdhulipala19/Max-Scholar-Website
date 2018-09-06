<?php   
if (get_magic_quotes_gpc())   
{   
  function stripslashes_deep($value)   
  {   
    $value = is_array($value) ?   
        array_map('stripslashes_deep', $value) :   
        stripslashes($value);   
   
    return $value;   
  }   
   
  $_POST = array_map('stripslashes_deep', $_POST);   
  $_GET = array_map('stripslashes_deep', $_GET);   
  $_COOKIE = array_map('stripslashes_deep', $_COOKIE);   
  $_REQUEST = array_map('stripslashes_deep', $_REQUEST);   
}   
   
   
$link = mysqli_connect('localhost', 'root', '');   
if (!$link)   
{   
  $error = 'Unable to connect to the database server.';   
  include 'error.html.php';   
  exit();   
}   
   
if (!mysqli_set_charset($link, 'utf8'))   
{   
  $output = 'Unable to set database connection encoding.';   
  include 'output.html.php';   
  exit();   
}   
   
if (!mysqli_select_db($link, 'clover_scores'))   
{   
  $error = 'Unable to locate the joke database.';   
  include 'error.html.php';   
  exit();   
}   
  
include 'quiz.html';  

?>