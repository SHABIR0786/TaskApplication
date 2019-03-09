<?php
include('connection.php');
$id = $_POST['id'];
 $lastmodified_at = date("Y/m/d h:i:s A");

 $query = "UPDATE tasks SET status='complete' WHERE id='$id'";
 $run = mysqli_query($con,$query);
if($run){
    echo "success";
}else{
    echo "error occur";
}
?>