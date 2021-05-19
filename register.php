<?php

include "config.php";
error_reporting(0);

   
        $fname =  mysqli_real_escape_string($conn,$_POST['fname']);
        $lname =  mysqli_real_escape_string($conn,$_POST['lname']);
        $email =  mysqli_real_escape_string($conn,$_POST['email']);
        $pass =  mysqli_real_escape_string($conn,$_POST['pass']);
        $cpass =  mysqli_real_escape_string($conn,$_POST['cpass']);

        $password = password_hash($pass, PASSWORD_BCRYPT);
        $cpassword = password_hash($cpass, PASSWORD_BCRYPT);

          
        $emailqry = "SELECT * FROM register WHERE email='$email'";
        $qry = mysqli_query($conn, $emailqry);
        
        $num = mysqli_num_rows($qry);
        

        if ($num == 1) 
        {
           echo "<span style= 'color: white' >Email already Exists</span><br>" ;
        } 
        else if ($pass === $cpass) 
            {
                $sql = "INSERT INTO register ( fname, lname, email, pass, cpass, date) VALUES ('$fname','$lname','$email','$password','$cpassword', current_timestamp())";               
                $result = mysqli_query($conn, $sql);
                 if($result)
                    {
                        echo "<span style= 'color: white' >Registered Successfully</span><br>";
                    }   
                else
                    { 
                        echo "<span style= 'color: white' >Not Registered</span><br>";
                   }                 
            }
                else{                       
                      echo "<span style= 'color: white' >Password is Not Matching</span><br>";
                     
                    }
                   
         if(filter_var($email,FILTER_VALIDATE_EMAIL))
                    {
                    echo "<span style= 'color: white' >Valid email</span><br>";
                    }
                    else
                    {
                    echo "<span style= 'color: white' >Invalid email</span><br>";
                    }

                         
            
    ?>