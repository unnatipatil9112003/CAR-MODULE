<?php
$car_id=$_GET['car_id'];
$conn = mysqli_connect('localhost','root','','unnatidb');
$q="select * from cars where car_id=$car_id";
$result=mysqli_query($conn,$q);
$row=mysqli_fetch_array($result);
?>
<html>
    <body>
        <form action="car-update-save.php" method="post">
        <label for="car_name">Car Name:</label><br>
        <input type="text" name="car_name" value="<?php echo $row['car_name']; ?>"><br>        
        <label for="car_no">Car Number:</label><br>
        <input type="number" name="car_no" value="<?php echo $row['car_no']; ?>"><br>
        <label for="car_price">Car Price:</label><br>
        <input type="number" name="car_price" value="<?php echo $row['car_price']; ?>"><br>      
        <label for="car_type">Car type:</label><br>
        <select name="car_type" value= "<?php echo $row['car_type']; ?>">
            <option value="sports" >sports</option>
            <option value="luxury">luxury</option>
        </select>
        <br><br>
        <button type="submit">submit</button>
        </form>
    </body>
</html>
