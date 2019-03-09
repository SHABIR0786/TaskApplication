
function openNav() {
    document.getElementById("mySidenav").style.left = "0px";
    document.getElementsByClassName('sidenav')[0].style.left = "0px";
    document.body.style.transition = "0.5";
    document.getElementsByClassName("mynavbar")[0].style.backgroundColor = "#337ab7";
}
function closeNav() {
    document.getElementsByClassName("mynavbar")[0].style.backgroundColor = "rgba(13, 126, 222, 1)";
    document.getElementsByClassName('sidenav').style.left = "-250px;"
    document.getElementById("mySidenav").style.left = "-250px";
    document.body.style.transition = "0.5";
}

function deleterecord(id) {
  $.ajax({
      url:'deletetask.php',
      type:'GET',
      data:{'id':id},
      success:function(response){
        M.toast({html: "delete Successfully"});    
        selectallrecords('continue');
        selectallrecords('complete');
        selectallrecords('expire');



      },
      error:function(response){
        M.toast({html: "Error Occur"});          
      }
  })
}
function selectallrecords(status){
    $.ajax({
        url:'tasks.php',
        type:'GET',
        data:{'status':status},
        success:function(response){
            if(status == 'continue'){
                $('#test1 #collection').html(response);
            }else if(status == 'complete'){
                $('#test2 #collection').html(response);                
            }else{
                $('#test3 #collection').html(response);                
            }
        },
        error:function(response){
        console.log(response);
        }
    }); 
}

function completetask(id){
    console.log(id);
    $.ajax({
        url:'taskcomplete.php',
        type:'POST',
        data:{'id':id},
        success:function(response){
            console.log(response);
            if(response == "success"){
                M.toast({html: 'complete task!'})
                selectallrecords('continue');
            }else{
                M.toast({html: 'error!'})  
            }
        $('#test2 #collection').html(response);
        },
        error:function(response){
            M.toast({html: response});
        }
    }); 
}


function showrecord(id){
    $.ajax({
       url:'showrecord.php',
       type:'GET',
       data:{'id':id},
       success:function(response){
        $('#taskshowresult').html(response);
       },
       error:function(response){
           console.log(response);
       }
    })
}
$(document).ready(function(){
    $('.tabs').tabs();
    $('.modal').modal();
    $('select').formSelect();
    $('.datepicker').datepicker({
        selectMonths: true,
        selectYears: 200, 
        format: 'yyyy/mm/dd'
    });
    $.ajax({
        url:'expiredtask.php',
        type:'GET',
        data:{},
        success:function(response){
            console.log(response);
        },
        error:function(response){
        console.log(response);
        }
    });

    $.ajax({
    url:'tasks.php',
    type:'GET',
    data:{'status':'continue'},
    success:function(response){
     $('#test1 #collection').html(response);
    },
    error:function(response){
    console.log(response);
    }
    });

    $('#completetask').click(function(){
        selectallrecords('complete');
    });
    $('#expiretask').click(function(){
        console.log("hello");
        selectallrecords('expire');
    });


    $('#form').submit(function(e){
        e.preventDefault();
     var task_title =    $('#task_title').val();
     var task_priority = $('#task_priority').val();
     var duedate = $('#duedate').val();
     console.log(duedate);
     var description = $('#description').val();

     $('#form').serialize();
     $.ajax({
         url:'addtask.php',
         type:'POST',
         data:{'task_title':task_title,'task_priotity':task_priority,'duedate':duedate,'description':description},
         success:function(response){
             console.log(response);
            M.toast({html: 'task added successfully!'})
             selectallrecords('continue');
               $('#task_title').val("");
              $('#task_priority').val("");
             $('#duedate').val("");
              $('#description').val("");
         },
         error:function(response){
             console.log(response);
         }
     });
    })
  });