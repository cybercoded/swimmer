<?php
include('../constant/connect.php');
    
    
   $id=$_GET['id'];
   //echo $id;exit; 
    $cname=$_POST["cname"];
      $ctype=$_POST["ctype"];

      $status=$_POST["status"];
      
   
    
    $query1="update competition set cname='".$cname."',ctype='".$ctype."',status='".$status."' where id=".$id."";
    //echo $query1;exit;

   if(mysqli_query($con,$query1)){
     
            echo "<html><head><script>alert('Routine Updated Successfully');</script></head></html>";
            echo "<meta http-equiv='refresh' content='0; url=../admin/view_competition.php'>";  
   }
   else{
    echo "<html><head><script>alert('ERROR! Update Opertaion Unsucessfull');</script></head></html>";
    echo "error".mysqli_error($con);
   }
    

?>
