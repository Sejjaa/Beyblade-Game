

<?php   
session_start();
require 'Connection.php';

if(isset($_POST["btnL"])){
$username=$_POST["username"];
$password=$_POST["password"];

$sql="SELECT * FROM beyblade WHERE username='$username' and password='$password'  ";
$query=mysqli_query($database,$sql);
$result=mysqli_fetch_assoc($query);
if($query){
	$_SESSION["id"]=$result["id"];
	$_SESSION["name"]=$result["username"];
	header( "Location:../beyblade.php" );
}else{
	header( "Location:../beyblade.php" );

}




}else{
	header( "Location:../beyblade.php" );

}




 ?>