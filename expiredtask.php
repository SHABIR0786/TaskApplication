<?php
include('connection.php');
$date =   date("Y/m/d");
echo $date;
$query = "SELECT * FROM tasks WHERE status = 'continue' AND  DATE(duedate) < '$date'";
$result = mysqli_query($con,$query);
if ($result) {
    while($row = mysqli_fetch_array($result)) { 
        echo $id =  $row['id']; 
$query = "UPDATE tasks SET status = 'expire' WHERE id='$id'";
$run = mysqli_query($con,$query);      
}
}












?>