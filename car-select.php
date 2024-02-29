<?php
    $conn =mysqli_connect('localhost','root','','unnatidb');

    $q="select * from cars";
    $res=mysqli_query($conn,$q);

    $row=mysqli_fetch_array($res);
    echo "<table border=1><tr><th>car_id</th> <th>car name</th> <th>car number</th> <th>car price</th> <th>car type</th> <th>Delete</th> </tr>";
    while ($row=mysqli_fetch_array($res))
        {
            echo "<tr><td>".$row['car_id']."</td>
            <td>".$row['car_name']."</td>
            <td>".$row['car_no']."</td>
            <td>".$row['car_price']."</td>
            <td>".$row['car_type']."</td>
            <td>"."<a onclick=return confirm('Are you sure want to delete??') href='car-delete.php?car_id=".$row['car_id']."'>Delete</a></td>
             </tr>";
        }
    echo "</table>";    
?>

<html>
        <body>
            <a href="form.html"> Insert Data</a>
        </body>
</html>