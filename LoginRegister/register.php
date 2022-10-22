<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <?php 
        session_start();

        include '../TemplateHTML/Navbar/home.php'; 
    ?>
    <div class="loginForm">
        <section class="log">
            <h1 class="loginHeader">Register</h1><hr>
            <div class="login">
                <form action="trial.php" method="POST">

             
                    <!-- name -->
                    <div class="form-outline mb-4">
                        <input type="text" name="uName" id="form2Example1" class="form-control" required/>
                        <label class="form-label" for="form2Example1" >Name</label>
                    </div> 


                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="uEmail" id="form2Example1" class="form-control" required />
                        <label class="form-label" for="form2Example1" >Email address</label>
                    </div>


                    <!-- phone number -->
                    <div class="form-outline mb-4">
                        <input type="number" name="phno" id="phnoLength" class="form-control" /*onkeyup='phnoLength();'*/ required/>
                        <label class="form-label" for="phnoLength" >Phone No</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="password" class="form-control" onkeyup='passLength(); check();'  />
                        <label class="form-label" id="passLabel" for="password">Password</label>
                    </div>

                    <!-- confirm password -->
                    <div class="form-outline mb-4">
                        <input type="password" name="uPass" id="conf_password" class="form-control"  onkeyup='check();' />
                        <label class="form-label" for="conf_password">Confirm Password</label>
                    </div>
                    <span id="message"></span>



                    <div class="text-center">
                        <p>Already a member ? <a href="./login.php">Login</a></p>
                    </div>
                <!-- 2 column grid layout for inline styling -->
                <!-- <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                    <!--    <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                    </div>
    
                    <div class="col">
                        <!-- Simple link --><!--
                        <a href="#!">Forgot password?</a>
                    </div>
                </div> -->


                    <!-- hiddenInputForLogin/RegisterIdentification -->
                    <input type="hidden" name="LoginRegister" value="register">
    
                <!-- Submit button -->
                    <button type="submit" id="submit" class="btn btn-primary btn-block mb-4" disabled>Register</button>
    
                <!-- Register buttons -->
                <!-- <div class="text-center">
                    <p>Not a member? <a href="#!">Register</a></p>
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>
    
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>
    
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>
    
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div> -->
                </form>
            </div>
        </section>
       
    </div>

        <a href="../AboutUs/about.html">About Us</a>
        <?php include '../TemplateHTML/Footer/footer.html'; ?>


        <!-- MDB -->
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"></script>

        <script>
            // var phnoLength = function() {
            //     if()
            // }

            var passLength = function() {
                
                if(document.getElementById('password').value.length <= 6){
                    document.getElementById('passLabel').style.color = 'red';
                    document.getElementById('passLabel').innerHTML = 'Password must be greater than 6 characters';
                    document.getElementById('submit').disabled = true;
                } else {
                    document.getElementById('passLabel').style.color = 'green';
                    document.getElementById('passLabel').innerHTML = 'good';
                    document.getElementById('submit').disabled = false;
                }
            }

            var check = function() {
                if (document.getElementById('password').value == document.getElementById('conf_password').value) {
                    // if(document.getElementById('password').value.length <= 6){
                    //     document.getElementById('message').innerHTML = 'Password must be greater than 6 characters';
                        
                    // }
                  document.getElementById('message').style.color = 'green'; 
                  document.getElementById('message').innerHTML = ' ';
                  document.getElementById('submit').disabled = false;
                } else {
                  document.getElementById('message').style.color = 'red';
                  document.getElementById('message').innerHTML = 'password not matching';
                  document.getElementById('submit').disabled = true;
                }
            }
        </script>
</body>

<script>
    
</script>

</html>