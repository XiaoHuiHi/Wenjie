<?php 
    session_start();

    include 'config.php';
    $msg = "";
    if(isset($_POST['submit'])) 
    {
        $email = mysqli_real_escape_string($conn,$_POST["email"]);

        if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM user WHERE Email = '{$email}'"))>0)
        {
            header("Location: Reset_pass.php?email=".$email);
        }
        else
        {
            $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; padding: 10px; text_align: center;'>$email - This email address do not found.</div>";
        }
    }
    
?>


<html>
<head><title>forgot password</title>
<link rel="stylesheet" href="stylesheet/style-forgotpassword.css">
</head>

<body>

<div class="forgotpassword-form">
<?php 
    echo $msg;
?>
<img src="image/signup.png">

<h1> Forgot password</h1>
<form method="POST">
<input type="email" name="email" class="input-box" placeholder="please type your email">

<button type="button" name="submit" class="signup-btn">Submit</button>
<p>We will send you a verification code to your email</p>

</form>
</div>
</body>
</html>