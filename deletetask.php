<?php
include('connection.php');
$id = $_GET['id'];
$query = "DELETE FROM tasks WHERE id = '$id'";
$run = mysqli_query($con,$query);

?>