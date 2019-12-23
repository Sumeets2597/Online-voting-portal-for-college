<?php

	
	
	$surname=$_POST['surname'];
	$firstname=$_POST['firstname'];
	$sex=$_POST['sex'];
	$post=$_POST['post'];
	$servername="localhost";
	$con = mysql_connect("localhost" , "root");
	mysql_select_db("vesit",$con);

	//Query for selecting data from table
	
		
			
		$sql = "insert into  culturalincharge(surname,candidate_name,sex,Post,candidate_position)values('$surname','$firstname','$sex','$post','cultural')";
		if(!mysql_query($sql,$con))
	{
		die('Error' . mysql_error());
	}
	//echo "1 record added";


	//mysql_query ($sql,$con);
	mysql_close($con);

	echo '<script type="text/javascript"> alert("Registration Completed succesfully");window.location=\'cultural.php\';</script>';
			
			
			
			
	
?>
