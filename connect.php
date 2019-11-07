<?php 
/*code to connect server*/
$con = mysqli_connect('localhost','root');

if($con){
	echo "connection successful";
}else{
	echo "Database Connection Error";
}
/*code to connect Database*/
mysqli_select_db($con,'thesimpleweb');

 ?>