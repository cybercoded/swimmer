<?php
	include('../constant/connect.php');
	
		
		$cname=$_POST["cname"];
		$ctype=$_POST["ctype"];

		$status=$_POST["status"];
		
		
		
		
		$sql="insert into competition(cname,ctype,status) values('$cname','$ctype','$status')";
	
		$result=mysqli_query($con,$sql);
		if($result){	
		
			echo "<head><script>alert('Routine Added');</script></head></html>";
			echo "<meta http-equiv='refresh' content='0; url=../admin/view_competition.php'>";
		}else{
			echo "<head><script>alert('Routine Added Failed');</script></head></html>";
			echo mysqli_error($con);
		}
	
	
?>