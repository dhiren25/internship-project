<?php
// if($_POST['update']){
    session_start();   
     $_POST["email"]=$_SESSION['email'];
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $pass=$_POST["pass"];
        $npass=$_POST["nfpass"];
$conn = mysqli_connect("localhost","root","",'be@unique');  
$q = "SELECT * FROM `admin_info` WHERE  password ='$pass'"; 
$res = mysqli_query($conn,$q);
$exists="No";
if (isset($_POST['pass']))
{
    while ($row = mysqli_fetch_array($res)) 
    {
        $exists="Yes";
    }
    if($exists=="Yes")
    {
        $sql="UPDATE `admin_info` SET `firstname`='$fname',`lastname`='$lname',`mobilenum`='$phone',`password`='$npass' WHERE `email`='$email'";
        $insert = mysqli_query( $conn,$sql);
        if($insert){
            echo "<script>alert('data upadate successfully')</script>
                    <script>location. href='profile-detail.php'</script>";
        }
        echo "<script>location. href='profileupdate.php'</script>";
    }
    else{
        echo"<script>alert('invalid password')</script>";
        echo "<script>location. href='profileupdate.php'</script>";
    }
        
        

        
   }else{echo"error1";}
// }else{echo"error2";}
?>