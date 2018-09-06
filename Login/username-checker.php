<?php   
if(isset($_POST["username"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }


    $mysqli = new mysqli('localhost' , 'root', '', 'test');
    if ($mysqli->connect_error){
        die('Could not connect to database!');
    }
    
    $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    
    $statement = $mysqli->prepare("SELECT username FROM users WHERE username=?");
    $statement->bind_param('s', $username);
    $statement->execute();
    $statement->bind_result($username);
    $my_var=true;

    if($statement->fetch()){  
        $data = '{
        "b": "false"
        }';

        $res=json_encode($data);
        echo $res;
        die('Username Taken. Please enter a different username.');
        $statement->close();
        
    }else{

        $data = '{
        "b": "true"
        }';

        $res=json_encode($data);
        echo $res;

        die();
        

    }
   // echo json_encode($statement->fetch());
    $mysqli->close();
}


?>