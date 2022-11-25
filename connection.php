<?php
//Server info
$server = "localhost:8080";
$username = "root";
$password = "";
$db = "poll";

//getting connection
try{
  $handle = new PDO("mysql:host=$server;dbname=$db", "$username","$password");
  $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "connected";
 

}
catch(PDOException $e)
{
  die("Oops something went wrong");
}

?>