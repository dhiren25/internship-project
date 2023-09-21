<?php

$conn = mysqli_connect("localhost","root","",'be@unique');    
        $wname=$_POST["wname"];
        $catagory=$_POST["catagory"];
        $color=$_POST["color"];
        $price=$_POST["price"];
        $brand=$_POST["brand"];
        $date=$_POST["date"];
        $description=$_POST["description"];
        $dialcolor=$_POST['dialcolor'];
        $dialglassmaterial=$_POST['dialglassmaterial'];
        $caseshape=$_POST['caseshape'];
        $casematerial=$_POST['casematerial'];
        $casediameter=$_POST['casediameter'];
        $bandcolor=$_POST['bandcolor'];
        $bandmaterial=$_POST['bandmaterial'];


        $img=  basename($_FILES["upload"]["name"]);
        $imgsize=$_FILES['upload']['size'];
        $tmpname=$_FILES['upload']['tmp_name'];

        $validImageExtension = ['jpg','jpeg','png'];
        $imageExtension = explode('.',$img);
        $imageExtension = strtolower(end($imageExtension));
            $newImageName = uniqid();
            $newImageName.='.'.$imageExtension;
            move_uploaded_file($tmpname,'img/'.$newImageName);
            $sql="INSERT INTO `product` (`watch_name`, `catagory`, `Description`, `color`, `price`,`brand`,`date_add`,`img`, `dial_color`, `dial_glass_material`, `case_shape`, `case_material`, `case_diameter`, `band_color`, `band_material`)
            VALUES ('$wname', '$catagory ', '$description', '$color', '$price', '$brand', '$date','$newImageName','$dialcolor','$dialglassmaterial','$caseshape','$casematerial','$casematerial','$bandcolor','$bandmaterial')";
            $insert = mysqli_query( $conn,$sql);
            if($insert){
                move_uploaded_file($_FILES['upload']['name'],"$img");
                session_start();
                $_SESSION['img']= $img;
                echo"<script>alert('product added')</script>
                     <script>location.href='addproduct.php'</script>";
            }
            else{
                echo "error" ;
            }
          
?>