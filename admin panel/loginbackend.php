<?php
// session_start();
$email = $_POST['email'];
$pass = $_POST['pass'];
// echo $email;
// echo $pass;

$c = mysqli_connect("localhost","root","","be@unique");
$q = "SELECT * FROM `admin_info` WHERE email= '$email' and password ='$pass'";
$res = mysqli_query($c,$q);
$exists="No";
if (isset($_POST['email']) && isset($_POST['pass']) )
{
    
    while ($row = mysqli_fetch_array($res)) 
    {
        $exists="Yes";
    }
    if($exists=="Yes")
    {
    
        echo "<script>location. href='index.php'</script>";
    }
    else{
        echo"<script>alert('invalid password')</script>";
        echo "<script>location. href='Admin_login.php'</script>";
    }
    session_start();
    $_SESSION['email']=$_POST['email'];
    
}
?>