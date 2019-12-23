<?php

	//define Variables
	$userid=$_POST['userid'];
	$password=$_POST['Password'];
	$surname=$_POST['surname'];
	$firstname=$_POST['firstname'];
	$middlename=$_POST['middlename'];
	$sex=$_POST['sex'];
	$date_of_birth=$_POST['date_of_birth'];
	
	$class=$_POST['class'];
	$division=$_POST['division'];
	$designation=$_POST['designation'];
    $servername="localhost";

	

	// Establish Connection to database
	$con = mysql_connect("localhost" , "root");
	mysql_select_db("vesit",$con);

	//Query for selecting data from table
	
		
			
		$sql = "insert into  register(userid,password,surname,firstname,middlename,sex,date_of_birth,class,division,designation)values('$userid','$password','$surname','$firstname','$middlename','$sex','$date_of_birth','$class','$division','$designation')";
		if(!mysql_query($sql,$con))
	{
		die('Error' . mysql_error());
	}
	//echo "1 record added";


	//mysql_query ($sql,$con);
	mysql_close($con);

	echo '<script type="text/javascript"> alert("Registration Completed succesfully");window.location=\'registermember.php\';</script>';
			
			
			
			
	
?>
