
<?php
//define vriables

$userid=$_POST['userid'];
$password=$_POST['password'];
$servername="localhost";

//Establish connection to database
$con = mysql_connect("localhost","root");
mysql_select_db("vesit",$con);

//Query for selecting data from table
$sql = "select * from register where userid='$userid' AND password='$password'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row1 = mysql_fetch_array($result);
$candidate_name_1=$row1['designation'];

if($records==0)
{


	echo "<script> alert('wrong password') 
	window.location.assign('CouncilLogin.php');

	</script>";
}

else if($candidate_name_1=="Cultural Incharge")
{
	
		session_start();
		$_SESSION["validlogin"] = "true";
		$_SESSION["username"] = $_POST['userid'];
		
	 
	echo "<script> window.location.assign('culturalhome.php');
	</script>";
}
else if($candidate_name_1=="SoOrt Incharge")
{
	
		session_start();
		$_SESSION["validlogin"] = "true";
		$_SESSION["username"] = $_POST['userid'];
		
	 
	echo "<script> window.location.assign('councilhome.php');
	</script>";
}
else if($candidate_name_1=="Music Incharge")
{
	
		session_start();
		$_SESSION["validlogin"] = "true";
		$_SESSION["username"] = $_POST['userid'];
		
	 
	echo "<script> window.location.assign('musichome.php');
	</script>";
}
else if($candidate_name_1=="Sports Incharge")
{
	
		session_start();
		$_SESSION["validlogin"] = "true";
		$_SESSION["username"] = $_POST['userid'];
		
	 
	echo "<script> window.location.assign('sportshome.php');
	</script>";
}
else if($candidate_name_1=="Faculty")
{
	
		session_start();
		$_SESSION["validlogin"] = "true";
		$_SESSION["username"] = $_POST['userid'];
		
	 
	echo "<script> window.location.assign('councilhome.php');
	</script>";
}
else if($candidate_name_1=="Class Representation")
{
	
		session_start();
		$_SESSION["validlogin"] = "true";
		$_SESSION["username"] = $_POST['userid'];
		
	 
	echo "<script> window.location.assign('councilhome.php');
	</script>";
}


?>