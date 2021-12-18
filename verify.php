<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

$username = $_POST["username"];
$password = $_POST["pwd"];

//$query = $mysqli->query("SELECT email, password from users");

$result = $mysqli->query('SELECT id,email,password,fname,type from users order by id asc');


  while($obj = $result->fetch_object()){
if($result){

    if(($obj->email == $username) && ($obj->password == $password)) {

      $_SESSION['username'] = $username;
      $_SESSION['type'] = $obj->type;
      $_SESSION['id'] = $obj->id;
      $_SESSION['fname'] = $obj->fname;
       echo "<script>window.location = 'index.php'</script>";
	  
		 break;
		}
		
	elseif(($obj->email != $username) || ($obj->password != $password))
		echo "<h1>Invalid Login! Redirecting...</h1><script> window.setTimeout(function() { window.location = 'login.php'; }, 5000) </script>"; 
	}
  
}


?>


        