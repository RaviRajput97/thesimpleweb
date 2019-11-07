<?php 
include 'connect.php';

/*code to access form data*/
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$quot = $_POST['quot'];

/*code of query to insert data in database*/
$query = "insert into quotdata (user, email, mobile, quot)
values ('$user', '$email', '$mobile', '$quot')";

/*code to fire query*/
mysqli_query($con,$query);

/*code to redirect to home*/
header('location:index.php');
 ?>