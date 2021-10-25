<?php 

if(!isset($name))
{
  $name = '';
}
   

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    
    <title>Login</title>
</head>

<body>
    <section  class="cxv" >
     
         <div class="login-body">
            <div class="right-half">
                <img id="logo" src="images/logo.png" alt=""><br>

                <form action="loginvalidation.php" method="post" >
                <input class="inp" type="text" name="username" id="" placeholder="Email"><br>

                <?php   if (isset($nameerror)) { ?>

                <span><?php echo $nameerror ; ?> </span>  <br>
  
                <?php  } ?> 

                <input class="inp" type="password" name="userpassword" id="" placeholder="Password"><br>

                <?php   if (isset($passworderror)) { ?>

                    <span><?php echo $passworderror ; ?></span> <br>


                <?php  } ?> 
                <input type="checkbox" name="" id="check-box"> Remember Me
                <a href="" id="Forgot-pass">Forgotten Password?</a><br>
                <input id="sign-in-button" type="submit" name="btn" value="submit">
                <!-- <a id="sign-in-button" href="#">Sign In</a> -->
                </form>
                <p class="sign-up-link">Don't Have an account..? <a href="Signup.html" class="Sign-Up">Sign Up</a> here</p>

            </div>
         </div>
        

    </section>

</body>

</html>