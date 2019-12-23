
<?php
//define vriables

$userid=$_POST['userid'];
$password=$_POST['password'];
$servername="localhost";

//Establish connection to database
$con = mysql_connect("localhost","root");
mysql_select_db("vesit",$con);

//Query for selecting data from table
$sql = "select * from admin where userid='$userid' AND password='$password'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);

if($records==0)
{


	echo "<script> alert('wrong password') 
	window.location.assign('AdminLogin.php');

	</script>";
}

else
{
	
		session_start();
		$_SESSION["validlogin"] = "true";
		$_SESSION["username"] = $_POST['userid'];
		
	 
	echo "<script> window.location.assign('adminhome.php');
	</script>";
}
?>