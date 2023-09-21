<?php
        session_start();
        $id=$_SESSION['id'];
        $Catagory=$_POST['catagory'];
        $brand=$_POST['brand'];
        $date=$_POST['date'];
        $watch_name=$_POST['wname'];
        $description=$_POST['description'];
        $quantity=$_POST['quantity'];
        $price=$_POST['price'];
        $color=$_POST['color'];
        $img=$_POST['upload'];
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
            move_uploaded_file($tmpname,'img/'.$img);

$conn = mysqli_connect("localhost","root","",'be@unique');  
        $sql="UPDATE `product` SET `watch_name`='$watch_name',`catagory`='$Catagory',`quantity`='$quantity',`Description`='$description',`color`='$color',`price`='$price',`brand`='$brand',`img`='$img',`date_add`='$date',
        `dial_color`='$dialcolor',`dial_glass_material`='$dialglassmaterial',`case_shape`='$caseshape',`case_material`='$casematerial',`case_diameter`='$casediameter',`band_color`='$bandcolor',`band_material`='$bandmaterial' WHERE `index`='$id'";
        $insert = mysqli_query( $conn,$sql);
        if($insert){
            echo "<script>alert('data upadate successfully')</script>
                    <script>location. href='updateproduct.php'</script>";
        }
        echo "<script>location. href='profileupdate.php'</script>";
?>