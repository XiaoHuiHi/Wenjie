<?php

    include 'config.php';
    $msg = "";
    
    if(isset($_POST['submit']))
    {
        $email = mysqli_real_escape_string($conn,$_POST["email"]);
        $password=mysqli_real_escape_string($conn,$_POST['pass']);
        
        $sql = "SELECT * FROM user WHERE Email = '{$email}' AND Password = '{$password}'";
        $result = mysqli_query($conn,$sql);
        
        $r = mysqli_num_rows($result);
        $re = mysqli_fetch_assoc($result);
        if($r === 1)
        {
            header("location: homepage.php?email=".$re['Email']);
            
        }
        else{
            $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; padding: 10px; text_align: center;'>Email or Password do not match.</div>";
        }
    }
?>

<html>
<head><title>Sign-In </title>
<link rel="stylesheet" href="stylesheet/style-signin.css">
</head>

<body>

<div class="sign-up-form">
<img src="image/signup.png">
<?php 
    echo $msg;
?>
<h1> Sign In Now</h1>
<form method="POST">
<input type="email" name="email" class="input-box" placeholder="Your email">
<input type="password" name="pass" class="input-box" placeholder="Your password">
<p><span><input type="checkbox"</span>I agree to the Terms of serivces</p>
<a href="landing page.html" style="text-decoration:none; color:white;"><button type="submit" name="submit" class="signup-btn">sign in</button></a>
<p><a href="forgot password.html">Forgot password?</p>  <a  href="sign up.html">Sign up now</a>


</form>
</div>
</body>
</html>