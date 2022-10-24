<?php

$name = "localhost";
$username = "root";
$password = "";
$dbname = "e_sanchayy";
$conn = mysqli_connect($name, $username, $password, $dbname);
if ($conn) {
    
    mysqli_select_db($conn, $dbname);
}
else{
    echo"Not connected to the Database.";
}




?>