<?php

    include '../QuesTemplate/functions.php';
    include '../TemplateHTML/boilerplate.html';
    css();
    include '../DBconn/dbconn.php';
    
    

    adminTemplate();

?>

        <div class="usersBox" style="display:flex; justify-content:center;"> 
            <div class="usersInBox" style="width:1000px;">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">User ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Address</th>
                      </tr>
                    </thead>
                    <tbody>
                        
                
        <?php
        
            $sql = "SELECT UserID ,UserName, Email, PhoneNumber, UserAddress FROM users";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) { ?>
                  <!-- echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>"; -->
                      <tr>
                            <th scope="row"><?php echo $row["UserID"]; ?></th>
                            <td><?php echo $row["UserName"]; ?></td>
                            <td><?php echo $row["Email"]; ?></td>
                            <td><?php echo $row["PhoneNumber"]; ?></td>
                            <td><?php echo $row["UserAddress"]; ?></td>
                        </tr>

                <?php }
              } else {
                echo "<h5>No users<h5>";
              }
              
              mysqli_close($conn);
        
        
        ?>
                    
                            
                    </tbody>
                </table>
            </div> <!-- usersInBox -->
        </div> <!-- usersBox -->
    </div>
</div>
</body>
</html>  