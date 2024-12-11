<?php
	include('../constant/connect.php');
	
		
		$pname=$_POST["pname"];
		
		$status=$_POST["status"];
		
		
		
		
		$sql="insert into competitiontype(pname,status) values('$pname','$status')";
	
		$result=mysqli_query($con,$sql);
		if($result){	
		
			echo "<head><script>alert('Routine Added');</script></head></html>";
			echo "<meta http-equiv='refresh' content='0; url=../admin/view_competitiontype.php'>";
		}else{
			echo "<head><script>alert('Routine Added Failed');</script></head></html>";
			echo mysqli_error($con);
		}
	
	
?>