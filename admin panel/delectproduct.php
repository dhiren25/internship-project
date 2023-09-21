<?php
     
     if (isset($_GET['id'])) {
      session_start();
      $id=$_GET['id'];
     }
     $conn = mysqli_connect("localhost","root","",'be@unique');
     $sql = "DELETE FROM `product` WHERE `index`=$id";
     $insert = mysqli_query( $conn,$sql);
     if($insert){
        echo "<script>alert('data delect successfully')</script>
                    <script>location. href='updateproduct.php'</script>";
        }
        echo "<script>location. href='updateproduct.php'</script>";
?>