<?php
include('connection.php');
 $task_title = trim($_POST['task_title']);
 $task_priotity = trim($_POST['task_priotity']);
  $duedat = trim($_POST['duedate']);
$date = strtotime($s);
$duedatee = date('d/M/Y H:i:s', $duedat);
echo $duedatee;
 $description = trim($_POST['description']);
 $create_at =   date("Y/m/d h:i:s A");
 $lastmodified_at =    date("Y/m/d h:i:s A");
$query = "INSERT INTO tasks(title,priority,dueDate,description,status,created_at,lastmodified_at) VALUES ('$task_title','$task_priotity','$duedat','$description','continue','$create_at','$lastmodified_at')";
$run = mysqli_query($con,$query);
if($run){
echo "added successfully";
}else{
echo "error occur";
}
?>