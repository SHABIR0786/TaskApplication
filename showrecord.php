<?php
include('connection.php');
 $id = $_GET['id'];
$query = "SELECT * FROM tasks  WHERE id = '$id'";
$result = mysqli_query($con,$query);


if ($result) {
    while($row = mysqli_fetch_array($result)) { 
    $priority = $row['priority'];  
    $pro;
    switch($priority){
        case 1:
        $pro = "Maximum";
        break;
        case 2:
        $pro = "Good";
        break;
        case 3:
        $pro = "Normal";
        break;
        case 4:
        $pro = "Average";
        break;
        case 5:
        $pro = "Low";
        break;
        default:
        $pro = "Priority not mention";
     }

    echo  '<h5>Title</h5>   <p>'.$row["title"].'</p>'; 
    echo  '<h5>Priority</h5>   <p>'.$pro.'</p>'; 
    echo  '<h5>Due Date</h5>   <p>'.$row["dueDate"].'</p>'; 
    echo  '<h5>description</h5>   <span>'.$row["description"].'</span>'; 


     
} }else {
    echo mysql_error();
  }
  
  


?>