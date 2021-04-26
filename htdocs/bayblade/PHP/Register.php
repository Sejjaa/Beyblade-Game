

<?php   
session_start();
require 'Connection.php';

if(isset($_POST["btnR"])){
$username=$_POST["username"];
$password=$_POST["password"];
$exist=0;
$sql="SELECT * FROM beyblade WHERE username='$username' ";
$query=mysqli_query($database,$sql);
$result=mysqli_fetch_ASSOC($query);
if($query){
	if($username == $result["username"]){
		header("Location:../beyblade.php");

		$_SESSION["usererror"]="User Name is Taken";
	}else{
		$sql="INSERT INTO beyblade VALUES (NULL,'$username','$password' )   ";	
		$query=mysqli_query($database,$sql);
		$sql="INSERT INTO makeornotmake VALUES (NULL,'$exist' )   ";	
		$query=mysqli_query($database,$sql);
		if($query){
			header( "Location:../beyblade.php" );

		}else{
			header( "Location:../beyblade.php" );	
				
		}

	}



}else{
	header( "Location:../beyblade.php" );

}




}else{
	header( "Location:../beyblade.php" );

}




 ?>