<?php
    session_start();

if($_SERVER['REQUEST_METHOD'] == "GET"){
    $itemName = $_GET['itemName'];

    switch($itemName) {
        case "fridge":
            include 'TemplateHTML/boilerplate.html';
      

            include 'TemplateHTML/Navbar/home.php';
            ?>
            <div class="container1" style=" background-color: teal;">

              <div class="mainContainer" style="background-color: grey; display:flex; justify-content:center;">
                <div class="headerContainer"> </div>

                <div class="bodyContainer" style="background-color: aliceblue; height:800px; width:1300px">

                  <div class="container ">
                    <div class="row">
                        <div class="col-5" id="small" style="background-color: #d4d4d4; height:800px;">
                            <h2 style="text-align:center"> Fridge </h2>
                            <center>
                              <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="./assets/img/fridge.jpg" alt="" srcset="" >
                              <div class="promiseText" style="width:450px; height: 100px; margin-top: 20px; background-color: white; border-radius: 20px; display:flex; flex-direction: row;">
                                <img class="promiseImg" style="height:100px; width:120px; border-radius:20px; margin-left:10px;" src="assets/img/promise.jpg" alt="">
                                <p style="margin-top:10px;">                                  
                                    Accurately describe your device and we promise the quoted value and a smooth, streamlined transaction. No bull. That's a promise.
                                </p>                             
                              </div>
                            </center>
                        </div>

                        <div class="col-7" id="big" style="background-color: #ebebeb;  height:800px;">
                            <form action="inputDB.php" enctype="multipart/form-data" method="POST">

                                <h1 style="text-align:center">Enter the details</h1>

                                <input type="hidden" name="itemName" value="fridge">

                                <div class="mb-3" style="margin-top: 30px;">
                                      <label for="formGroupExampleInput2" class="form-label" id="condition">Select the condition of the bridge:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="condition" id="door">
                                        <option value="New">New</option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Broken">Broken</option>
                                      </select>
                                </div>


                                <div class="mb-3" >
                                    <label for="formGroupExampleInput" id="brand" class="form-label">Select the brand of your fridge:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"> -->
                                    <select class="form-select" name="brand" id="brand">
                                        <option selected>Select brand</option>
                                        <option value="Whirpool">Whirpool</option>
                                        <option value="LG">LG</option>
                                        <option value="Samsung">Samsung</option>
                                        <option value="Haier">Haier</option>
                                        <option value="Godrej">Godrej</option>
                                        <option value="Videocon">Videocon</option>
                                        <option value="Kenstar">Kenstar</option>
                                        <option value="Sansui">Sansui</option>
                                        <option value="Voltas">Voltas</option>
                                        <option value="Lloyd">Lloyd</option>
                                        <option value="Sharp">Sharp</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" id="door" class="form-label">Is your fridge:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="door" id="door">
                                        <option value="Double Door">Double Door</option>
                                        <option value="Single Door">Single Door</option>
                                      </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" id="storage" class="form-label">Select the storage of your fridge:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="storage" id="storage">
                                        <option value="100 ltrs">100 ltrs</option>
                                        <option value="200 - 300ltrs">200 - 300ltrs</option>
                                        <option value="300 - 400ltrs">300 - ltrs</option>
                                        <option value="400 - 500ltrs">400 - 500ltrs</option>
                                        <option value="Above 500ltrs">Above 500ltrs</option>
                                      </select>
                                </div>

                                <!-- upload file  -->
                                <div class="mb-3">
                                  <div class="form-group">
                                    <label for="fileInput">Upload a picture of your fridge: </label>
                                    <input class="form-control" id="fileInput" type="file" name="uploadfile" value="" />
                                  </div>
                                </div>

                                <div>
                                  <center>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="submit" class="btn btn-primary">
                                    <a href="./index.html" style="color: white; text-decoration:none;">
                                     Back
                                     </a>
                                     </button>
                                  </center>
                                </div>


                            </form>
                        </div>
                  </div>
                </div>
              </div>
              <!-- <a href="./index.html">Back</a> -->
            </div>
              <?php include 'TemplateHTML/Footer/footer.html'; ?>
            </body>
            </html>
            <?php
            break;

        case "aircon":
          
            include 'TemplateHTML/boilerplate.html';
            include 'TemplateHTML/Navbar/home.php';

            include './QuesTemplate/upperBody.html'; ?>
            <h2 style="text-align:center"> AC </h2>
                  <center>
                    <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="./assets/img/ac.jpg" alt="" srcset="" >

            <?php include 'QuesTemplate/midBody.html'; ?>

                                <div class="mb-3" style="margin-top: 30px;">
                                      <label for="formGroupExampleInput2" class="form-label" id="condition">
                                        Select the condition of your AC:
                                      </label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="condition" id="door">
                                        <option value="New">New</option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Average</option>
                                        <option value="Below Average">Below Average</option>
                                      </select>
                                </div>


                                <div class="mb-3" >
                                    <label for="formGroupExampleInput" id="brand" class="form-label">Select the brand of your AC:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"> -->
                                    <select class="form-select" name="brand" id="brand">
                                        <option selected>Select brand</option>
                                
                                        
                                        <option value="Samsung">Samsung</option>
                                        <option value="Haier">Haier</option>
                                        <option value="Godrej">Godrej</option>
                                        <option value="Videocon">Videocon</option>
                                        <option value="Carrier Global">Carrier Global</option>
                                        <option value="Hitachi">Hitachi</option>
                                        <option value="Voltas">Voltas</option>
                                        <option value="Lloyd">Lloyd</option>
                                        <option value="Daikin">Daikin</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" id="model" class="form-label">Is your AC:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="model" id="model">
                                        <option value="Split AC">Split AC</option>
                                        <option value="Window AC">Window AC</option>
                                      </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" id="capacity" class="form-label">Select the capacity of your AC:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="capacity" id="capacity">
                                        <option value="1 ton">100 ltrs</option>
                                        <option value="1.1 ton">1.1 ton</option>
                                        <option value="1.5 ton">1.5 ton</option>
                                        <option value="2 ton">2 ton</option>
                                        <option value="Other">Other</option>
                                      </select>
                                </div>

                                <input type="hidden" name="itemName" value="aircon">
                                <!-- upload file  -->
                                <div class="mb-3">
                                  <div class="form-group">
                                    <label for="fileInput">Upload a picture of your ac: </label>
                                    <input class="form-control" id="fileInput" type="file" name="uploadfile" value="" />
                                  </div>
                                </div>
            <?php

                include 'QuesTemplate/lowerBody.php';
            break;

        case "geyser":
          include 'TemplateHTML/boilerplate.html';
          include 'TemplateHTML/Navbar/home.php';

          include './QuesTemplate/upperBody.html'; ?>
          <h2 style="text-align:center"> GEYSER </h2>
                <center>
                  <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="./assets/img/geyser.jpeg" alt="" srcset="" >

          <?php include 'QuesTemplate/midBody.html'; ?>

                              <div class="mb-3" style="margin-top: 30px;">
                                    <label for="formGroupExampleInput2" class="form-label" id="condition">
                                    Which brand is your geyser is?
                                    </label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="condition" id="door">
                                    <option selected>Select brand</option>
                                      <option value="Havells">Havells</option>
                                      <option value="AO Smith">AO Smith</option>
                                      <option value="Bajaj">Bajaj</option>
                                      <option value="Crompton">Crompton</option>
                                      <option value="Racold">Racold</option>
                                      <option value="Orient electric">Orient electric</option>
                                    </select>
                              </div>


                              <div class="mb-3" >
                                  <label for="formGroupExampleInput" id="brand" class="form-label">What type of geyser do you have?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"> -->
                                  <select class="form-select" name="type" id="brand" onchange="displayDivDemo('hideValuesOnSelect', this)">
                                      <option selected>Select type</option>
                                      <option value="0" >Instant geyser</option>
                                      <option value="1">Storage geyser</option>
                                  </select>
                              </div>

                              <div id="hideValuesOnSelect" class="mb-3">
                                    <label for="formGroupExampleInput2" id="model" class="form-label">If storage geyser, what is the capacity:</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="model" id="model">
                                    <option selected>Select capacity</option>
                                      <option value="1-3ltrs">1-3ltrs</option>
                                      <option value="6ltrs">6ltrs</option>
                                      <option value="25ltrs">25ltrs</option>
                                      <option value="None">None</option>
                                    </select>
                              </div>
                                
                              <div class="mb-3">
                              <label for="formGroupExampleInput2" id="typw" class="form-label">What is the condition of your geyser?</label>
                              <select class="form-select" name="model" id="model">
                                    <option selected>Select condition</option>
                                      <option value="New">New</option>
                                      <option value="Good">Good</option>
                                      <option value="Fair">Fair</option>
                                      <option value="Broken">Broken</option>
                                    </select>                              
                                </div>


                              <input type="hidden" name="itemName" value="aircon">
                              <!-- upload file  -->
                              <div class="mb-3">
                                <div class="form-group">
                                  <label for="fileInput">Upload a picture of your geyser: </label>
                                  <input class="form-control" id="fileInput" type="file" name="uploadfile" value="" />
                                </div>
                              </div>
          <?php

              include 'QuesTemplate/lowerBody.php';
          break;

        case "laptop":
          include 'TemplateHTML/boilerplate.html';
          include 'TemplateHTML/Navbar/home.php';

          include './QuesTemplate/upperBody.html'; ?>
          <h2 style="text-align:center"> LAPTOP </h2>
                <center>
                  <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="./assets/img/laptop.jpg" alt="" srcset="" >

          <?php include 'QuesTemplate/midBody.html'; ?>

                              <div class="mb-3" style="margin-top: 30px;">
                                    <label for="formGroupExampleInput2" class="form-label" id="condition">
                                    What is the brand of your laptop?
                                    </label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="condition" id="door">
                                    <option selected>Select brand</option>
                              
                                      <option value="Dell">Dell</option>
                                      <option value="Lenovo">Lenovo</option>
                                      <option value="Hp">Hp</option>
                                      <option value="Asus">Asus</option>
                                      <option value="Sony">Sony</option>
                                      <option value="Google">Google</option>
                                      <option value="Other">Other</option>
                                    </select>
                              </div>

                              <div class="mb-3">
                              <label for="formGroupExampleInput2" id="typw" class="form-label">Which Model:</label>
                              <input class="form-control " type="text" placeholder="">
                              </div>

                              <div class="mb-3" >
                                  <label for="formGroupExampleInput" id="brand" class="form-label">What is the condition of your laptop?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"> -->
                                  <select class="form-select" name="brand" id="brand">
                                      <option selected>Select condition</option>
                              
                                      
                                      <option value="New">New</option>
                                      <option value="Good">Good</option>
                                      <option value="Fair">Fair</option>
                                      <option value="Broken">Broken</option>
                              
                                  </select>
                              </div>

                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="model" class="form-label">What type of processor does your laptop have?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="model" id="model">
                                      <option value="Intel core i3">Intel core i3</option>
                                      <option value="Intel core i5">Intel core i5</option>
                                      <option value="Intel core i7">Intel core i7</option>                                    </select>
                              </div>
                                
                              

                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="capacity" class="form-label">Is your laptop fully functional?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="capacity" id="capacity">
                                      <option value="Yes">Yes</option>
                                      <option value="No">No</option>
                                    </select>
                              </div>
                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="capacity" class="form-label">How is your laptop’s battery health?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="capacity" id="capacity">
                                      <option value="Good">Good</option>
                                      <option value="Poor">Poor</option>
                                    </select>
                              </div>

                              <input type="hidden" name="itemName" value="aircon">
                              <!-- upload file  -->
                              <div class="mb-3">
                                <div class="form-group">
                                  <label for="fileInput">Upload a picture of your laptop: </label>
                                  <input class="form-control" id="fileInput" type="file" name="uploadfile" value="" />
                                </div>
                              </div>
          <?php

              include 'QuesTemplate/lowerBody.php';
          break;

        case "mobile":
          include 'TemplateHTML/boilerplate.html';
          include 'TemplateHTML/Navbar/home.php';

          include './QuesTemplate/upperBody.html'; ?>
          <h2 style="text-align:center"> MOBILES </h2>
                <center>
                  <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="./assets/img/smartphone.jpg" alt="" srcset="" >

          <?php include 'QuesTemplate/midBody.html'; ?>

                              <div class="mb-3" style="margin-top: 30px;">
                                    <label for="formGroupExampleInput2" class="form-label" id="condition">
                                    Is your phone (OR)
                                    </label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="condition" id="door">
                                    <option selected>Select Operating System</option>
                              
                                      <option value="Android">Android</option>
                                      <option value="IOS">IOS</option>
                                    </select>
                              </div>


                              <div class="mb-3" >
                                  <label for="formGroupExampleInput" id="brand" class="form-label">What is your phone's brand?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"> -->
                                  <select class="form-select" name="brand" id="brand">
                                      <option selected>Select brand</option>
                              
                                      
                                      <option value="Samsung">Samsung</option>
                                      <option value="Google">Google</option>
                                      <option value="Mi">Mi</option>
                                      <option value="LG">LG</option>
                                      <option value="One Plus">One Plus</option>
                                      <option value="Lava">Lava</option>
                                      <option value="Motorola">Motorola</option>
                                      <option value="Sony">Sony</option>
                                      <option value="Blackberry">Blackberry</option>
                                      <option value="Realme">Realme</option>
                                      <option value="Oppo">Oppo</option>
                                      <option value="Huawei">Huawei</option>
                                      <option value="Nokia">Nokia</option>
                                      <option value="Other">Other</option>
                                  </select>
                              </div>

                              <div class="mb-3">
                              <label for="formGroupExampleInput2" id="typw" class="form-label"></label>Which Model ?
                              <input class="form-control " type="text" placeholder="">
                              </div>

                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="model" class="form-label">Is the battery life of the phone</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="model" id="model">
                                    <option value="Good">Good</option>
                                    <option value="Moderate">Moderate</option>
                                    <option value="Poor">Poor</option>

                                    </select>
                              </div>
                                
                              
                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="capacity" class="form-label">What is the quality of the display of the phone</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="capacity" id="capacity">
                                    <option value="Good">Good</option>
                                      <option value="Slightly malfunction">Slightly malfunction</option>
                                      <option value="Fully malfunctional">Fully malfunctional</option>
                                    </select>
                              </div>

                              <input type="hidden" name="itemName" value="aircon">
                              <!-- upload file  -->
                              <div class="mb-3">
                                <div class="form-group">
                                  <label for="fileInput">Upload a picture of your mobile: </label>
                                  <input class="form-control" id="fileInput" type="file" name="uploadfile" value="" />
                                </div>
                              </div>
          <?php

              include 'QuesTemplate/lowerBody.php';
          break;

        case "television":
          include 'TemplateHTML/boilerplate.html';
          include 'TemplateHTML/Navbar/home.php';

          include 'QuesTemplate/upperBody.html'; ?>
           <h2 style="text-align:center"> TELEVISION </h2>
                  <center>
                    <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="./assets/img/tv.jpg" alt="" srcset="" >

          <?php include 'QuesTemplate/midBody.html'; ?>

          <div class="mb-3" style="margin-top: 30px;">
                                      <label for="formGroupExampleInput2" class="form-label" id="damage">
                                      What is the brand of your television?
                                      </label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="condition" id="door">
                                      <option value="Samsung">Samsung</option>
                                    
                                      <option value="Mi">Mi</option>
                                      <option value="LG">LG</option>
                                      <option value="One Plus">One Plus</option>
                                      <option value="Videocon">Videocon</option>
                                      <option value="Motorola">Motorola</option>
                                      <option value="Sony">Sony</option>
                                      <option value="Nokia">Nokia</option>
                                      <option value="Haier">Haier</option>
                                      <option value="Toshiba">Toshiba</option>
                                      <option value="Other">Other</option>
                                      </select>
                                </div>


                                <div class="mb-3" >
                                    <label for="formGroupExampleInput" id="brand" class="form-label">Which model(with inches)</label>
                                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                    
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" id="func" class="form-label">Is it available with accessories(remote,bill,etc.):</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="mobFunc" id="func">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                      </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" id="capacity" class="form-label">What is the condition of your TV?:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="phnStorage" id="capacity">
                                        <option value="New">New</option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Broken">Broken</option>
                                        
                                      </select>
                                </div>
								 <div class="mb-3">
                                      <label for="formGroupExampleInput2" id="func" class="form-label">Is your tv fully functional:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="mobFunc" id="func">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                      </select>
                                </div>

                                <!-- upload file  -->
                                <div class="mb-3">
                                  <div class="form-group">
                                    <label for="fileInput">Upload a picture of your tv : </label>
                                    <input class="form-control" id="fileInput" type="file" name="uploadfile" value="" />
                                  </div>
                                </div>
            <?php

                include 'QuesTemplate/lowerBody.php';
            break;
        case "desktop":
          include 'TemplateHTML/boilerplate.html';
          include 'TemplateHTML/Navbar/home.php';

          include './QuesTemplate/upperBody.html'; ?>
          <h2 style="text-align:center"> DESKTOP </h2>
                <center>
                  <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="./assets/img/desktop.jpg" alt="" srcset="" >

          <?php include 'QuesTemplate/midBody.html'; ?>

                              <div class="mb-3" style="margin-top: 30px;">
                                    <label for="formGroupExampleInput2" class="form-label" id="condition">
                                    What is the brand of your Desktop?
                                    </label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="condition" id="door">
                                    <option selected>Select brand</option>
                              
                                      <option value="Dell">Dell</option>
                                      <option value="Lenovo">Lenovo</option>
                                      <option value="HP">HP</option>
                                      <option value="Apple">Apple</option>
                                      <option value="Alienware">Alienware</option>
                                      <option value="Intel">Intel</option>
                                      <option value="Other">Other</option>
                                    </select>
                              </div>

                              <div class="mb-3">
                              <label for="formGroupExampleInput2" id="typw" class="form-label">What is the model of your Desktop?</label>
                              <input class="form-control " type="text" placeholder="">
                              </div>

                              <div class="mb-3" >
                                  <label for="formGroupExampleInput" id="brand" class="form-label">Which video card does your desktop have?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"> -->
                                  <select class="form-select" name="brand" id="brand">
                                      <option selected>Select</option>
                              
                                      
                                      <option value="NVIDIA GeForce GTX 1050 Ti ">NVIDIA GeForce GTX 1050 Ti </option>
                                      <option value=" NVIDIA GeForce GTX 1060 "> NVIDIA GeForce GTX 1060 </option>
                                      <option value="NVIDIA GeForce GTX 1070 ">NVIDIA GeForce GTX 1070 </option>
                                      <option value=" NVIDIA GeForce GTX 1080 "> NVIDIA GeForce GTX 1080 </option>
                                      <option value=" AMD Radeon RX 560 "> AMD Radeon RX 560 </option>
                                      <option value=" AMD Radeon RX 570 "> AMD Radeon RX 570 </option>
                                      <option value="AMD Radeon RX 580 ">AMD Radeon RX 580 </option>
                                  
                                  </select>
                              </div>

                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="capacity" class="form-label">What type of processor does your Desktop have?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="capacity" id="capacity">
                                      <option value=" Intel core i3 8th Gen "> Intel core i3 8th Gen </option>
                                      <option value=" Intel core i5 8th Gen "> Intel core i5 8th Gen </option>
                                      <option value=" Intel core i7 8th Gen "> Intel core i7 8th Gen </option>
                                      <option value=" Intel core i5 9th Gen "> Intel core i5 9th Gen </option>
                                      <option value=" Intel core i7 9th Gen "> Intel core i7 9th Gen </option>
                                    </select>
                              </div>

                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="capacity" class="form-label">What is the Desktop's storage capacity?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="capacity" id="capacity">
                                      <option value=" 256GB SSD "> 256GB SSD </option>
                                      <option value=" 512GB SSD "> 512GB SSD </option>
                                      <option value=" 1TB SSD "> 1TB SSD </option>
                                      <option value=" 2TB SSD "> 2TB SSD </option>
                                      <option value=" 500GB HDD "> 500GB HDD </option>
                                      <option value=" 1TB HDD "> 1TB HDD </option>
                                      <option value=" 2TB HDD "> 2TB HDD </option>
                                      <option value="4TB HDD ">4TB HDD </option>
                                      <option value="Other ">Other </option>
                                    </select>
                              </div>


                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="model" class="form-label">Is your Desktop fully functional?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="model" id="model">
                                      <option value="Split AC">Yes</option>
                                      <option value="Window AC">No</option>
                                    </select>
                              </div>
                              
                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="capacity" class="form-label">What is the condition of your Desktop?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="capacity" id="capacity">
                                      <option value="New">New</option>
                                      <option value="Good">Good</option>
                                      <option value="Fair">Fair</option>
                                      <option value="Broken">Broken</option>
                                    </select>
                              </div>

                              <input type="hidden" name="itemName" value="aircon">
                              <!-- upload file  -->
                              <div class="mb-3">
                                <div class="form-group">
                                  <label for="fileInput">Upload a picture of your Desktop </label>
                                  <input class="form-control" id="fileInput" type="file" name="uploadfile" value="" />
                                </div>
                              </div>
          <?php

              include 'QuesTemplate/lowerBody.php';
          break;

        case "printer":
          include 'TemplateHTML/boilerplate.html';
          include 'TemplateHTML/Navbar/home.php';

          include './QuesTemplate/upperBody.html'; ?>
          <h2 style="text-align:center"> PRINTER </h2>
                <center>
                  <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="./assets/img/printer.jpg" alt="" srcset="" >

          <?php include 'QuesTemplate/midBody.html'; ?>

                              <div class="mb-3" style="margin-top: 30px;">
                                    <label for="formGroupExampleInput2" class="form-label" id="condition">
                                    What is the brand of your printer?
                                    </label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="condition" id="door">
                                    <option selected>Select brand</option>
                              
                                      <option value="Cannon">Cannon</option>
                                      <option value="HP">HP</option>
                                      <option value="Epson">Epson</option>
                                      <option value="Samsung">Samsung</option>
                                      <option value="Dell">Dell</option>
                                      <option value="Other">Other</option>
                                    </select>
                              </div>

                              <div class="mb-3">
                              <label for="formGroupExampleInput2" id="typw" class="form-label">What is the model of your Printer?</label>
                              <input class="form-control " type="text" placeholder="">
                              </div>

                              <div class="mb-3" >
                                  <label for="formGroupExampleInput" id="brand" class="form-label">What is the type of Printer?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"> -->
                                  <select class="form-select" name="brand" id="brand">
                                      <option selected>Select</option>
                                      
                                      <option value="Inkjet printer">Inkjet printer</option>
                                      <option value="3D printer">3D printer</option>
                                      <option value="Laser printer">Laser printer</option>
                                      <option value=" Multi function printer">Multi function printer</option>
                                      <option value=" Thermal printer">Thermal printer</option>
                                      <option value="LED printer">LED printer </option>
                                      <option value="Other">Other</option>
                                  </select>
                              </div>

                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="model" class="form-label">What is the age of your printer?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="model" id="model">
                                      <option value=" 1-3 years"> 1-3 years </option>
                                      <option value=" 3-5 years"> 3-5 years </option>
                                      <option value=" More than 5 years"> More than 5 years </option>
                                    </select>
                              </div>
                              

                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="model" class="form-label">Is your Printer fully functional?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="model" id="model">
                                      <option value="Yea">Yes</option>
                                      <option value="No">No</option>
                                    </select>
                              </div>

                              <input type="hidden" name="itemName" value="aircon">
                              <!-- upload file  -->
                              <div class="mb-3">
                                <div class="form-group">
                                  <label for="fileInput">Upload a picture of your Printer</label>
                                  <input class="form-control" id="fileInput" type="file" name="uploadfile" value="" />
                                </div>
                              </div>
          <?php

              include 'QuesTemplate/lowerBody.php';
          break;

        

        case "radio":
          include 'TemplateHTML/boilerplate.html';
          include 'TemplateHTML/Navbar/home.php';

          include './QuesTemplate/upperBody.html'; ?>
          <h2 style="text-align:center"> RADIO </h2>
                <center>
                  <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="./assets/img/radio.jpg" alt="" srcset="" >

          <?php include 'QuesTemplate/midBody.html'; ?>

                              <div class="mb-3" style="margin-top: 30px;">
                                    <label for="formGroupExampleInput2" class="form-label" id="condition">
                                    Which brand is your Radio?
                                    </label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="condition" id="door">
                                    <option selected>Select brand</option>
                              
                                      <option value="SONY Radio">SONY Radio</option>
                                      <option value="Saregama Carvaan Mini">Saregama Carvaan Mini</option>
                                      <option value="Pagaria Retro Radio">Pagaria Retro Radio</option>
                                      <option value="Zoook Rocker Thunder">Zoook Rocker Thunder</option>
                                      <option value="Philips Radio">Philips Radio</option>
                                      <option value="Panasonic Radio">Panasonic Radio</option>
                                      <option value="Toshiba Pocket Radio">Toshiba Pocket Radio</option>
                                      <option value="Amkette Pocket FM Radio">Amkette Pocket FM Radio</option>
                                      <option value="Other">Other</option>
                                      
                                    </select>
                              </div>


                              <div class="mb-3" >
                                  <label for="formGroupExampleInput" id="brand" class="form-label">How old is your Radio?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"> -->
                                  <select class="form-select" name="brand" id="brand">
                                      <option selected>Select</option>
                              
                                      
                                      <option value="1-3 Years">1-3 Years</option>
                                      <option value="3-5 Years">3-5 Years</option>
                                      <option value="More than 5 Years">More than 5 Years</option>
                                  </select>
                              </div>

                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="model" class="form-label">Is your Radio fully functional?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="model" id="model">
                                      <option value="Split AC">Yes</option>
                                      <option value="Window AC">No</option>
                                    </select>
                              </div>
                                
                              <div class="mb-3">
                              <label for="formGroupExampleInput2" id="typw" class="form-label">What is the model of your Radio?</label>
                              <input class="form-control " type="text" placeholder="">
                              </div>

                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="model" class="form-label">Does your Radio contain charger?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="model" id="model">
                                      <option value="Split AC">Yes</option>
                                      <option value="Window AC">No</option>
                                    </select>
                              </div>

                              <input type="hidden" name="itemName" value="aircon">
                              <!-- upload file  -->
                              <div class="mb-3">
                                <div class="form-group">
                                  <label for="fileInput">Upload a picture of your Radio </label>
                                  <input class="form-control" id="fileInput" type="file" name="uploadfile" value="" />
                                </div>
                              </div>
          <?php

              include 'QuesTemplate/lowerBody.php';
          break;

        case "headphone":
          include 'TemplateHTML/boilerplate.html';
          include 'TemplateHTML/Navbar/home.php';

          include './QuesTemplate/upperBody.html'; ?>
          <h2 style="text-align:center"> HEADPHONES </h2>
                <center>
                  <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="./assets/img/headphones.jpg" alt="" srcset="" >

          <?php include 'QuesTemplate/midBody.html'; ?>

                              <div class="mb-3" style="margin-top: 30px;">
                                    <label for="formGroupExampleInput2" class="form-label" id="condition">
                                    What brand it is?
                                    </label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="condition" id="door">
                                    <option selected>Select brand</option>
                              
                                      <option value="Noise">Noise</option>
                                      <option value="Airpods">Airpods</option>
                                      <option value="Boat">Boat</option>
                                      <option value="Samsung">Samsung</option>
                                      <option value="Oneplus">Oneplus</option>
                                      <option value="Mi">Mi</option>
                                      <option value="Othar">Othar</option>
                                    </select>
                              </div>

                              <div class="mb-3">
                              <label for="formGroupExampleInput2" id="typw" class="form-label">Which model is it?</label>
                              <input class="form-control " type="text" placeholder="">
                              </div>

                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="model" class="form-label">Is it with charger?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="model" id="model">
                                      <option value="Yes">Yes</option>
                                      <option value="No">No</option>
                                      <option value="Not Applicable">Not Applicable</option>
                                    </select>
                              </div>
                               
                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="model" class="form-label">How old it is?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="model" id="model">
                                      <option value="1 year ">1 year </option>
                                      <option value="1-3 years ">1-3 years </option>
                                      <option value="More than 3 years ">More than 3 years </option>
                                    </select>
                              </div>

                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="model" class="form-label">Is it fully functional?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="model" id="model">
                                      <option value="Yes">Yes</option>
                                      <option value="No">No</option>
                                    </select>
                              </div>

                              
                              <input type="hidden" name="itemName" value="aircon">
                              <!-- upload file  -->
                              <div class="mb-3">
                                <div class="form-group">
                                  <label for="fileInput">Upload a picture of your Headphone </label>
                                  <input class="form-control" id="fileInput" type="file" name="uploadfile" value="" />
                                </div>
                              </div>
          <?php

              include 'QuesTemplate/lowerBody.php';
          break;

       

        case "hardisk":
          include 'TemplateHTML/boilerplate.html';
          include 'TemplateHTML/Navbar/home.php';

          include './QuesTemplate/upperBody.html'; ?>
          <h2 style="text-align:center"> HARD DISK </h2>
                <center>
                  <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="./assets/img/harddisk.jpeg" alt="" srcset="" >

          <?php include 'QuesTemplate/midBody.html'; ?>

                              <div class="mb-3" style="margin-top: 30px;">
                                    <label for="formGroupExampleInput2" class="form-label" id="condition">
                                    What is the brand of your Hard disk?
                                    </label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="condition" id="door">
                                    <option selected>Select brand</option>
                              
                                      <option value="Seagate ">Seagate</option>
                                      <option value="Toshiba">Toshiba</option>
                                      <option value="Western digital">Western digital</option>
                                      <option value="Lenovo">Lenovo</option>
                                      <option value="Transcend">Transcend</option>
                                      <option value="Sony">Sony</option>
                                      <option value="Consistent">Consistent</option>
                                      <option value="Other">Other</option>
                                    </select>
                              </div>

                              <div class="mb-3">
                              <label for="formGroupExampleInput2" id="typw" class="form-label">Which model is it?</label>
                              <input class="form-control " type="text" placeholder="">
                              </div>


                              <div class="mb-3" >
                                  <label for="formGroupExampleInput" id="brand" class="form-label">What is the storage of your Hard disk?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"> -->
                                  <select class="form-select" name="brand" id="brand">
                                      <option selected>Select</option>

                                      <option value="Less than 500GB">Less than 500GB</option>
                                      <option value="500GB">500GB</option>
                                      <option value="1TB">1TB</option>
                                      <option value="2TB">2TB</option>
                                      <option value="More than 2TB">More than 2TB</option>
                                  </select>
                              </div>

                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="model" class="form-label">How old is your Hard disk?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="model" id="model">
                                      <option value="1-3 Years">1-3 Years</option>
                                      <option value="3-5 Years">3-5 Years</option>
                                      <option value="More than 5 year">More than 5 years</option>
                                    </select>
                              </div>
                                

                              <input type="hidden" name="itemName" value="aircon">
                              <!-- upload file  -->
                              <div class="mb-3">
                                <div class="form-group">
                                  <label for="fileInput">Upload a picture of your Hard disk </label>
                                  <input class="form-control" id="fileInput" type="file" name="uploadfile" value="" />
                                </div>
                              </div>
          <?php

              include 'QuesTemplate/lowerBody.php';
          break;

        case "other":
          include 'TemplateHTML/boilerplate.html';
          include 'TemplateHTML/Navbar/home.php';

          include './QuesTemplate/upperBody.html'; ?>
          <h2 style="text-align:center"> OTHER </h2>
                <center>
                  <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="./assets/img/other.jpg" alt="" srcset="" >

          <?php include 'QuesTemplate/midBody.html'; ?>

                              <div class="mb-3" style="margin-top: 30px;">
                              <label for="formGroupExampleInput2" id="typw" class="form-label">What is your product?</label>
                              <input class="form-control " type="text" placeholder="">
                              </div>

                              <div class="mb-3">
                              <label for="formGroupExampleInput2" id="typw" class="form-label">What is the model name of your product?</label>
                              <input class="form-control " type="text" placeholder="">
                              </div>


                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="model" class="form-label">How old is your product?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="model" id="model">
                                      <option value="1-3 Years">1-3 Years</option>
                                      <option value="3-5 Years">3-5 Years</option>
                                      <option value="More than 5 year">More than 5 years</option>
                                    </select>
                              </div>


                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="model" class="form-label">Is it in working condition?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="model" id="model">
                                      <option value="Yes">Yes</option>
                                      <option value="No">No</option>
                                    </select>
                              </div>
                              

                              <input type="hidden" name="itemName" value="aircon">
                              <!-- upload file  -->
                              <div class="mb-3">
                                <div class="form-group">
                                  <label for="fileInput">Upload a picture of your product</label>
                                  <input class="form-control" id="fileInput" type="file" name="uploadfile" value="" />
                                </div>
                              </div>
          <?php

              include 'QuesTemplate/lowerBody.php';
          break;

            default:
                echo "<h1 style='text-center'>None of the cases matched ! :(</h1>";
            
             

        //echo "<h1> Works but what next ? </h1>";
        
        
        // }else if($itemName == "aircon"){
            //     include '../TemplateHTML/include.html';         
        
    }        

}else{
    echo "<h1>Oh no! There are some problems</h1>";
}

?>