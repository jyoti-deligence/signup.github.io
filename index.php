<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
</head>

<body>
 
    <div class="wrap">
        <h2 class="text">Sign Up Form</h2>
        
            <form action="register.php" method="post">
                First Name<input type="text" name="fname"  value="" id="fname" placeholder="First Name">
                
               Last Name<input type="text" name="lname"  value="" id="
                lname" placeholder="Last Name">
                Email ID <input type="text" name="email" id="email"  value="" placeholder="Enter Email ID">
              Password<input type="password" name="pass" id="pass" value="" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                Confirm Password<input type="password" name="cpass" id="cpass" value="" placeholder="Confirm password">
                
                <input type="submit" name="submit" value="Submit">
            </form>
            <div class="text-center">Already have an account? <a href="#" style= 'color: pink'>Sign in</a></div>
        </div>
        
  


   
</body>

</html>