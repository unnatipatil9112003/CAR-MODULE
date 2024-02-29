<?php
$conn = mysqli_connect('localhost','root','','unnatidb');
$car_name=$_POST['car_name'];
$car_no=$_POST['car_no'];
$car_price=$_POST['car_price'];
$car_type=$_POST['car_type'];
$q="UPDATE `cars` SET  `car_name`='$car_name',`car_no`='[value-3]',`car_type`='[value-4]',`car_price`='[value-5]',`Deleted`='[value-6]' WHERE 1";
$result=mysqli_query($conn,$q);
if(mysqli_affected_rows($conn)>=1){
    echo "alert('Record Updated!!!'); window.location='car-select.php'; ";
}
?>
