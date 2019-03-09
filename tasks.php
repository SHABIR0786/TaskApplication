<?php
include('connection.php');
 $status = $_GET['status'];
$query = "SELECT * FROM tasks  WHERE status = '$status' ORDER BY tasks.priority ASC";
$result = mysqli_query($con,$query);
if ($result) {
    if($status == 'continue'){
    while($row = mysqli_fetch_array($result)) {   
      if (strlen($row["description"]) >50){
        $str = substr($row["description"], 0, 50) . '...';
      }else{
        $str = $row["description"];
      }
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

      echo    '<div class="col s12 m4">
                  <div class="card blue">
                              <div class="card-content white-text">
                                <span class="card-title">'.$row["title"].'</span>
                                <span> <span>Due Date  </span> <b>'.$row["dueDate"].'</b></span>
                                <p>Priority   <b>'.$pro.'</b></p>
                                
                                 <h5>Description</h5>
                                <p>'.$str.'</p>
                              </div>
                      <div class="card-action">
                        <div class="row" style="height:0px;">
                                   <div class="col-sm-4" style="text-align:center;">
                                     <a href="#!" onclick="completetask('.$row['id'].')" class="secondary-content">
                                     <i   class="fas fa-check"></i></a>
                                   </div>
                                    <div class="col-sm-4" style="text-align:center; cursor:pointer;">
                                      <a  href="#modal2"  onclick="showrecord('.$row['id'].')" class="secondary-content modal-trigger" ><i class="small material-icons">visibility</i></a>
                                    </div>
                                    <div class="col-sm-4" style="text-align:center;">
                                      <a href="#!"   onclick="deleterecord('.$row['id'].')" class="secondary-content"><i  class="small material-icons">delete</i></a>
                                    </div>
                           </div>
                      </div>
                  </div>
                </div>';
    
    }
    }else if($status == 'complete'){
    while($row = mysqli_fetch_array($result)) {  
      if (strlen($row["description"]) >50){
        $str = substr($row["description"], 0, 50) . '...';
      }else{
        $str = $row["description"];
      }
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

      echo    '<div class="col s12 m4">
      <div class="card blue">
                  <div class="card-content white-text">
                    <span class="card-title">'.$row["title"].'</span>
                    <span> <span>Due Date  </span> <b>'.$row["dueDate"].'</b></span>
                    <p>Priority   <b>'.$pro.'</b></p>
                    
                     <h5>Description</h5>
                    <p>'.$str.'</p>
                  </div>
          <div class="card-action">
            <div class="row">
                        <div class="col-sm-6" >
                          <a  style="float:left;" onclick="showrecord('.$row['id'].')" class="secondary-content modal-trigger" href="#modal2" ><i class="small material-icons">visibility</i></a>
                        </div>
                        <div class="col-sm-6" style="text-align:center;">
                          <a href="#!" style="float:right;"  onclick="deleterecord('.$row['id'].')" class="secondary-content"><i  class="small material-icons">delete</i></a>
                        </div>
               </div>
          </div>
      </div>
    </div>';
    }    
  } 
  else if($status == 'expire'){
    while($row = mysqli_fetch_array($result)) {  
      if (strlen($row["description"]) >50){
        $str = substr($row["description"], 0, 50) . '...';
      }else{
        $str = $row["description"];
      }
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

      echo    '<div class="col s12 m4">
      <div class="card blue">
                  <div class="card-content white-text">
                    <span class="card-title">'.$row["title"].'</span>
                    <span> <span>Due Date  </span> <b>'.$row["dueDate"].'</b></span>
                    <p>Priority   <b>'.$pro.'</b></p>
                    
                     <h5>Description</h5>
                    <p>'.$str.'</p>
                  </div>
          <div class="card-action">
            <div class="row">
                        <div class="col-sm-6" >
                          <a  style="float:left;" onclick="showrecord('.$row['id'].')" class="secondary-content modal-trigger" href="#modal2" ><i class="small material-icons">visibility</i></a>
                        </div>
                        <div class="col-sm-6" style="text-align:center;">
                          <a href="#!" style="float:right;"  onclick="deleterecord('.$row['id'].')" class="secondary-content"><i  class="small material-icons">delete</i></a>
                        </div>
               </div>
          </div>
      </div>
    </div>';
    }    
  }






















}
  else {
    echo mysql_error();
  }
?>