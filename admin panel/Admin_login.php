
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Ludiflex | Login</title>

</head>
<body>
    <form action="loginbackend.php" method="post">
   <div class="box">
    <div class="container">
        
        <div class="top">
            <!-- <span>Admin</span> -->
            <header>Admin Login</header>
        </div>

        <div class="input-field">
            <input type="email" class="input" name="email" placeholder="Email Address" id="email" required>
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="Password" class="input" name="pass" placeholder="Password" id="pass" required>
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <input type="submit" name="submit" class="submit" value="Login" id="">
        </div>

        <div class="two-col">
            <div class="one">
               <input type="checkbox" name="" id="check">
               <label for="check"> Remember Me</label>
            </div>
            <div class="two">
                <label><a href="forgotpassword.php">Forgot password?</a></label>
            </div>
        </div>
        <div class="two-col2">
             <div class="three">
                <label>Register Your Self First</label>
              </div>
              <div class="four">
                <label><a href="Admin_register.php">Click Me</a></label>
              </div>
        </div>
    </div>
</div>  
    </form>
</body>
</html>