<?php


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $uname = $_POST["uName"];
    $uemail = $_POST["uEmail"];
    $uphone = $_POST["uPhone"];
    $umessage = $_POST["uMessage"];


    $uname = strip_tags($uname);
    $uemail = strip_tags($uemail);
    $uphone = strip_tags($uphone);
    $umessage = strip_tags($umessage);

    
    include '../DBConn/dbconn.php'; 


    $sql = "INSERT INTO contactus(UName, UEmail, UPhone, UMessage) values('$uname', '$uemail', '$uphone', '$umessage')";

    if (mysqli_query($conn, $sql)) {
        echo"<center><p style='color:white; font-family:sans-serif; width: 600px; height: 20px;'>Your message has been sent!</p></center>";
        header( "refresh:5;url=main.php" );
    }
    else{
        echo"Record not inserted:(";
    }


}else{
    echo "Not working";
}





?>