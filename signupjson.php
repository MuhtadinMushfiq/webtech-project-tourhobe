<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST ['email'];
$userpassword = $_POST['userpassword'];
$confirmpassword = $_POST['confirmpassword'];
$username = $_POST['username'];
$usertype = $_POST['usertype'];


if(file_exists('signup.json'))  
     {  
          $current_data = file_get_contents('signup.json');  
          $array_data = json_decode($current_data, true);  
          $extra = array(  
            'firstname'       =>     $_POST['firstname'],
            'lastname'        =>     $_POST['lastname'],
            'username'        =>     $_POST['username'],
            'password'        =>     $_POST['userpassword'],  
            'confirmpassword' =>     $_POST["confirmpassword"],  
            'email'           =>     $_POST["email"],
            'usertype'        =>     $_POST["usertype"],
             
          );  
          $array_data[] = $extra;  
          $final_data = json_encode($array_data);  
          if(file_put_contents('signup.json', $final_data))  
          {  
               $message = "<label class='text-success'>Sign up sucessfully</p>";  
          }  
     }  
     else  
     {  
          $error = 'JSON File not exits'; 
       }  


?>