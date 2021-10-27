<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up | By Code Info</title>
    <link rel="stylesheet" href="signup.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="signup-box">
      <h1>Sign Up</h1>
      <h4>It's free and only takes a minute</h4>
      <form action="signupvalidation.php" method="post" >
        <label>First Name</label>
        <input type="text" name="firstname" placeholder="" />

        <?php   if (isset($fnameerror)) { ?>

        <span><?php echo $fnameerror ; ?> </span>  <br>

        <?php  } ?> 



        <label>Last Name</label>
        <input type="text" name="lastname" placeholder="" />

        <?php   if (isset($lnameerror)) { ?>

        <span><?php echo $lnameerror ; ?> </span>  <br>

        <?php  } ?> 




        <label>Email</label>
        <input type="email" name="email" placeholder="" />

        <?php   if (isset($mailerror)) { ?>

        <span><?php echo $mailerror ; ?> </span>  <br>

        <?php  } ?> 

        <label>Password</label>
        <input type="password" name="password" placeholder="" />

        <?php   if (isset($passworderror)) { ?>

        <span><?php echo $passworderror ; ?> </span>  <br>

        <?php  } ?> 

        <label>Confirm Password</label>
        <input type="password" name="confirmpassword" placeholder="" />

        <?php   if (isset($cnpassworderror)) { ?>

        <span><?php echo $cnpassworderror ; ?> </span>  <br>

        <?php  } ?> 

        <input id="sign-in-button" type="submit" name="btn" value="submit">

        <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
        ?>  

      </form>
      <p>
        
        By clicking the Sign Up button,you agree to our <br />
        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
      </p>
    </div>
    <p class="para-2">
      Already have an account? <a href="login.html">Login here</a>
    </p>
  </body>
</html>

