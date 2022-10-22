
<?php  include 'TemplateHTML/boilerplate.html';
      

      include 'TemplateHTML/Navbar/home.php';

      ?>
    

     
        <div class="loginForm" data-loginForm="true" style="">
        <section class="log" data-log="true">
            <h1 class="loginHeader" data-loginHeader="true">Login</h1>
            <hr>
            <div class="login" data-login="true">

                <form action="trial.php" method="POST">


                    <!-- Email input -->
                    <div class="form-outline mb-4" data-formoutline="true"> 
                        <input type="email" name="uEmail" id="form2Example1" class="form-control" required"/>
                        <label class="form-label" for="form2Example1">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4" data-formoutline="true">
                        <input type="password" name="uPass" id="form2Example2" class="form-control"required"/>
                        <label  class="form-label" for="form2Example2">Password</label>
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                <label class="form-check-label" for="form2Example31"> Remember me </label>
                            </div>
                        </div>

                        <div class="col">
                            <!-- Simple link -->
                            <a href="#!">Forgot password?</a>
                        </div>
                    </div>

                    <!-- hiddenInputForLogin/RegisterIdentification -->
                    <input type="hidden" name="LoginRegister" value="login">

                    <!-- Submit button -->
                    <button type="submit" value="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                    
                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Not a member? <a href="./register.php">Register</a></p>
                        <!-- <p>or sign up with:</p> -->
                        <!-- <button type="button" class="btn btn-link btn-floating mx-1">
                            <a href="https://github.com/R0-H-1T"><div class="fab fa-facebook-f"></div></a>
                            
                        </button> -->
                        <!-- 
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-google"></i>
                        </button>
        
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                        </button>
        
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-github"></i>
                        </button> -->
                    </div>
                </form>

            </div>
        </section>

        </div>
   
       <?php include 'TemplateHTML/Footer/footer.html'; ?>
  