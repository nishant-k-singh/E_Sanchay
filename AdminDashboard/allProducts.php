<?php


    include '../TemplateHTML/boilerplate.html';
    
    include '../DBconn/dbconn.php';
    include '../QuesTemplate/functions.php';

    adminTemplate();
?>
        <div class="productBox">
            <div class="productInBox">
                <center><h1 style="margin-bottom:50px;">Displaying all products</h1></center>



                <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        
        $sql = "SELECT UserName, Email, UserAddress, PhoneNumber, productID ,productCategory, productDate, productAns, productType, adminResponse, productImgPath, userResponse,productCategory, productPrice FROM users, products where user_ID = userID ORDER BY productDate desc";


        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) { 
                
                $arr = removeHash($row["productAns"]);
                
                
                ?>
                
                <!-- echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>"; -->
                <div class="col">
                    <div class="card" style="width:400px; margin-bottom:30px;">
                        <center>
                            <img style="width:300px; height:300px; "src="../<?php echo $row["productImgPath"];  ?>" class="card-img-top" alt="...">
                        </center>

                        <!-- User details -->
                        <div class="card-footer">
                            <small class="text-muted"><center><b>Name: <?php echo $row["UserName"];?></b></center></small>
                        </div>

                        <div class="card-body">
                            <center>
                                <p class="card-text">
                                    <span>Email: <b><?php echo $row["Email"]; ?></b></span><br>
                                    <span>Phone No.: <b><?php echo $row["PhoneNumber"]; ?></b></span><br>
                                    <span>Address: <b><?php echo $row["UserAddress"]; ?></b></span>
                                </p>
                            </center>
                        </div>

                        <!-- product details -->
                        <div class="card-footer">
                            <small class="text-muted"><center><b>Product Details</b></center></small>
                        </div>
                        <div class="card-body">
                            <center>
                                <h5 class="card-title"><?php echo $row["productCategory"]; ?></h5>
                                <p class="card-text">
                                <?php foreach((array)$arr as $word) { ?>
                                <span><?php echo $word; ?></span><br>
                                <?php } ?>
                                </p>

                                <!-- admin response -->
                                <?php 
                                    if($row["adminResponse"] == "pending"){ ?>
                                        <p class="card-text"><b>Status: <?php echo $row["adminResponse"]; ?></b></p>
                                        <form action="updateResponseNPrice.php" method="POST">
                                            <input type="hidden" name="productID" value="<?php echo $row["productID"]; ?>">
                                            Update Status:
                                            <button type="submit" name="res" value="Approved" class="btn btn-success">Approve</button>
                                            <button type="submit" name="res" value="Rejected" class="btn btn-danger">Reject</button>
                                        </form>
                                   <?php } else { ?>
                                    <p class="card-text"><b>You have: <?php echo $row["adminResponse"]; ?></b></p>
                                    
                                   <?php } ?>

                                <!-- ------------------------------------------------------------------------------------------ -->
                                <?php if($row["userResponse"] == '') {
                                        
                                   ?>
                                    <?php if($row["productType"] == "sell"){

                                            if($row["adminResponse"] == "Approved"){ ?>
                                                <p class="card-text"><b>Up for SELLING</b></p>

                                                <?php if(!empty($row["productPrice"])) { ?>
                                                            <p class="card-text">Exchange value give: Rs <b><?php echo $row["productPrice"]; ?></b></p>
                                                <?php } else { ?>
                                                            <form action="updateResponseNPrice.php" method="POST">
                                                                <input type="hidden" name="res" value="<?php echo $row["adminResponse"]; ?>">
                                                                <input type="hidden" name="productID" value="<?php echo $row["productID"]; ?>">
                                                                <label for="price">Enter estimated exchange price:</label>
                                                                <input type="text" name="productPrice" id="price">
                                                                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                                                            </form>
                                                    <?php } ?>
                                            <?php }else{ 
                                                        if($row["adminResponse"] == "Rejected") { ?>
                                                                <p class="card-text"><b>You have rejected this product</b></p>
                                                        <?php }else { ?>
                                                                <p class="card-text"><b>Up for SELLING</b></p>                                                
                                                        <?php } ?>                                                    
                                            <?php }
                                    } else { 
                                            if($row["adminResponse"] == "Approved"){ ?>
                                                    <p class="card-text" style="background-color: green; border-radius: 10px; color:#f2f2f2"><b>The user has donated this product<h2>&#128515;</h2> </b></p>                                                
                                        <?php } 
                                    }
                            }else if($row["userResponse"] == '1') { ?>
                                    <p class="card-text" style="background-color: green; border-radius: 10px; color:#f2f2f2"><b>The user sold this product to us <h2>&#128515;</h2></b></p>                                                
                            <?php } else { ?>
                                    <p class="card-text" style="background-color: red; border-radius: 10px; color:#f2f2f2"><b>The user is not selling this product to us <h2> &#128577;</h2> </b></p>                                                
                            <?php } ?>
                                





                                <!-- ------------------------------------------------------------------------------------------ -->
                            </center>
                            


                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Date: <b><?php echo $row["productDate"]; ?></b></small>
                        </div>
                    </div>
              </div>
            
            
            <?php }
          } else {
            echo "<center><h3>Users haven't sold or donated any products</h3></center>";
          }


          // sell, donate
          //if donate && if(status == pending) display form
          //if sell && if(status == pending) display form
          //    => Two fields 1. status change 2. price range   

        ?>
                </div>

            </div> <!--productInBox -->
        </div> <!--productBox -->
    </div>
</div>



        </body>
        </html>