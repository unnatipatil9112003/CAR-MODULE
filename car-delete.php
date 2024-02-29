<?php
    $car_id=$_GET['car_id'];
    $conn=mysqli_connect ('localhost','root','','unnatidb');
    $q="delete cars set Deleted=1 where car_id=$car_id";
    $res=mysqli_query($conn,$q);
    if($res){
        echo "<script> alert('record deleted!!'); window.location='car-select.php'; </script>";
    }
?>
<html>
    <body>
        <a href="car-select.php">show data</a>
    </body>
</html>