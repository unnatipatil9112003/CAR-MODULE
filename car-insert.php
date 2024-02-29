<?php
    $conn=mysqli_connect ('localhost','root','','unnatidb');

    $car_name=$_POST['car_name'];
    $car_no=$_POST['car_no'];
    $car_price=$_POST['car_price'];
    $car_type=$_POST['car_type'];
    
    $q="insert into cars values ('NULL','$car_name','$car_no','$car_price','$car_type')";
    $res=mysqli_query($conn,$q);
    if($res)
    {
        echo "inserted";
        echo "insetred syccesfully";
    }
    else{
        echo "not inserted";
        echo mysqli_error($conn);
    }
?>
<html>
    <body>
        <a href="car-select.php">show data</a>
    </body>
</html>