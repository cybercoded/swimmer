<?php
include('../constant/connect.php');
    
    
   $id=$_GET['id'];
   //echo $id;exit; 
      $pname=$_POST["pname"];
      $status=$_POST["status"];
   
    
    $query1="update competitiontype set pname='".$pname."',status='".$status."' where id=".$id."";
    //echo $query1;exit;

   if(mysqli_query($con,$query1)){
     
            echo "<html><head><script>alert('Routine Updated Successfully');</script></head></html>";
            echo "<meta http-equiv='refresh' content='0; url=../admin/view_competitiontype.php'>";  
   }
   else{
    echo "<html><head><script>alert('ERROR! Update Opertaion Unsucessfull');</script></head></html>";
    echo "error".mysqli_error($con);
   }
    

?>
