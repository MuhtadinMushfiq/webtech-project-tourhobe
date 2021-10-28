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
                <input class="inp" type="text" name="username" id="" placeholder="username"><br>

                <?php   if (isset($nameerror)) { ?>

                    <b> <h3> <span style="color: red;">  <?php echo $nameerror ; ?></span>  </h3> </b>   <br>
  
                <?php  } ?> 

                <input class="inp" type="password" name="userpassword" id="" placeholder="Password"><br>

                <?php   if (isset($passworderror)) { ?>

                
                    <b> <h3> <span style="color: red;"><?php echo $passworderror ; ?></span>  </h3> </b> <br>   



                <?php  } ?> 

                <input type="checkbox" name="" id="check-box"> Remember Me
                <a href="" id="Forgot-pass">Forgotten Password?</a><br>
                <input id="sign-in-button" type="submit" name="btn" value="submit">

               <?php   if (isset($loginproblem)) { ?>

                <b> <h3> <span style="color: red;"><?php echo $loginproblem ; ?></span>  </h3> </b> <br>   


                <?php  } ?> 
               
     
                </form>
                <p class="sign-up-link">Don't Have an account..? <a href="Signup.php" class="Sign-Up">Sign Up</a> here</p>

            </div>
         </div>
        

    </section>

</body>

</html>