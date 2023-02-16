<?php
    session_start();
    
    include 'config.php';
    $msg = "";
    
    if(isset($_POST['submit']))
    {
        $name = mysqli_real_escape_string($conn,$_POST['user']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        
        $pass = mysqli_real_escape_string($conn,$_POST['pass']);
        $cpass = mysqli_real_escape_string($conn,$_POST['cpassword']);
        // $code = mysqli_real_escape_string($conn,$_POST['']);

        // $name = mysqli_real_escape_string($conn,$_POST['submit']);
        if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM user WHERE Email = '{$email}'"))>0)
        {
            $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; padding: 10px; text_align: center;'>{$email} - This email address has been already exists.</div>";
        }
        else
        {
            if($pass !== $cpass)
            {
                $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; padding: 10px; text_align: center;'>Password and Confirm Password do not Match</div>";
            }
            else if (!$name)
            {
                $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; text-align: center; padding: 10px; text_align: center;'>Please Key in Your Username.</div>";
            }
            else if(!$email)
            {
                $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; text-align: center; padding: 10px; text_align: center;'>Please Key in Your Email.</div>";
            }
            else if(filter_var($email,FILTER_VALIDATE_EMAIL) ===false) 
            {
                $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; text-align: center; padding: 10px; text_align: center;'>Email is Invalid.</div>";
            }
            else if(!$pass)
            {
                $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; text-align: center; padding: 10px; text_align: center;'>Please Key In Your Password!!!</div>";
            }

            if($pass === $cpass && $name && $email && $pass !='')
            {
                $sql = "INSERT INTO user (Name,Email,password,Image) VALUES ('{$name}','{$email}','{$pass}','profile.jpg')";
                $result = mysqli_query($conn,$sql);

                
                if($result)
                {
                    $msg = "<div style='background-color: green; color: white; font-weight: bold;border-radius: 30px; margin: 20px; margin-bottom: 0; padding: 10px; text-align: center; text_align: center;'>The Account have been create Successfuly</div>";
                }
                else
                {
                    $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; padding: 10px; text_align: center;'>Something Wrong Went.</div>";
                }
                header("Location: signin.php");
            }
            
            
        }
    }
?>


<html>
<head><title>Sign-Up </title>
<link rel="stylesheet" href="stylesheet/style-signup.css">
</head>

<body>

<div class="sign-up-form">
<img src="image/signup.png">
<?php echo $msg?>
<h1> Sign up Now</h1>
<form method="POST">
<input type="text" name="user" class="input-box" placeholder="Your Name" value="<?php echo $name?>">
<input type="email" name="email" class="input-box" placeholder="Your email" value="<?php echo $email?>">
<input type="password" name="pass" class="input-box" placeholder="Your password">
<input type="password" name="cpassword" class="input-box" placeholder="Confirm your password">
<p><span><input type="checkbox"></span>I agree to the Terms of serivces</p>
<button type="submit" name="submit" class="signup-btn">sign up</button>
<hr>
<a href="landing page.html" style="text-decoration:none; color:white;"><button type="button" class="twitter-btn"> login with twitter</button></a>
<p>Do you have already an account? <a href="sign in.html">Sign in</a></p>
</form>
</div>
</body>
</html>