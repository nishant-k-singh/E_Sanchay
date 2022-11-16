<?php

    session_start();
    include 'DBConn/dbconn.php';
    include 'TemplateHTML/boilerplate.html';
    include 'TemplateHTML/Navbar/home.php'; ?>
    

    <?php include './QuesTemplate/functions.php'; 
     echo "<img src='sort.jpg' alt='' style='max-width: 100%;
     height: auto; '>";
    echo "<div style='background-color:#182628; position:absolute; left:500px; top:300px; border-radius: 20px;
    padding: 20px 20px;'>";
   
    echo "<center><h1>Hello {$_SESSION['UName']}</h1><br>";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $add = $_REQUEST['address'];
        $fileupload = $_REQUEST['fileupload'];
        $productCategory = $_REQUEST['productCategory'];

        if(isset($_REQUEST['sell'])){
            // echo "You have decided to sell"; 

            // $sql = "INSERT INTO products(UName, UEmail, UPhone, UMessage) values('$uname', '$uemail', '$uphone', '$umessage')";

            $productType = 'sell';

        }else{
            // echo "You have decided to donate";
            $productType = 'donate';
        }


        $arr = $_REQUEST['arr'];
        //$arr = removeHash($arr);

        //adminResponse temporary - pending
        //img in table 
        //product details in table
        //productPrice 
        // user address

    }


?>    


<?php
  
    $user = "UPDATE users SET UserAddress = '$add' WHERE userID = '{$_SESSION["UserID"]}'";
    // $user = "INSERT INTO users(UserAddress) VALUE('$add') where userID = '{$_SESSION["UserID"]}'";

    $product = "INSERT INTO products(user_ID, admin_ID, productDate, productAns, productImgPath, productType, productCategory)
            VALUE('{$_SESSION["UserID"]}', 1, NOW(), '$arr', '$fileupload', '$productType', '$productCategory')";


    //echo $fileupload;
    //for user table
    if (mysqli_query($conn, $user)) {
         //for products table 
        if (mysqli_query($conn, $product)) {
            echo "<div class='container' style='padding:10px;'>
            <br><h3 style=' color:#378B50; width:500px; border-radius: 10px;'>Your response has been collected</h3><br>
            <b style='color:white; text-transform:uppercase'>Pls view the status on your <p style='color:green'>dashboard<p></b><br>
            <b style='color:white;'>Address given: $add </b><br>

            <a href='UserDashboard/user.php' class='btn btn-primary'>User Dashboard</a>
            <a href='SellItem?itemName=fridge'>BACK</a></center>
            </div>";
        }
        else{
            echo"Record not inserted in products:(";
        }
        echo"</div>";
    }
    else{
        echo"Record not inserted of users:(";
    }


   



      mysqli_close($conn);
    include 'TemplateHTML/Footer/footer.html';

?>

