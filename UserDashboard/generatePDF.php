<?php
    require('../fpdf/fpdf.php');

    include '../DBConn/dbconn.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $productID = $_REQUEST["prodID"];

        if(isset($_REQUEST["receipt"])){
            $sql = "SELECT UserName, Email, UserAddress, PhoneNumber, productID ,productCategory, productDate, productAns, productType, adminResponse, productImgPath, userResponse,productCategory, productPrice FROM users, products where productID = $productID ORDER BY productDate desc";  
            // $sql = "SELECT userName from users join products on user_id = userID where productID = $productID";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                //echo $row["userName"];

                $pdf=new FPDF();
                $pdf->AddPage();
                $pdf->SetFont('Arial','B',16);
                $pdf->Cell(40,10, 'Hello '.$row["UserName"],1,0); 
                $pdf->Cell(40,10, 'Product name '.$row["productDate"], 1,0); 
                $pdf->Output();
            }else {
                echo "greater than one; REALLY";
            }

            



            
        }
    }


?>