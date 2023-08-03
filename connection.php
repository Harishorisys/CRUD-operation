<?php
$dsn = "localhost";
$dbUser = "root";
$dbpassword = "";
$dbname = "crud";

 $conn = new mysqli( $dsn, $dbUser,$dbpassword,$dbname);
 if($conn){
   //  echo "CONNECTION SUCESSFULLY DONE";
 }
 else{
    die(mysqli_error($conn));
 }

?>