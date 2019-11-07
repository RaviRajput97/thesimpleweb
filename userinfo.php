<?php 
include 'connect.php';

/*code to access form data*/
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comment'];

/*code of query to insert data in database*/
$query = "insert into userinfodata (user, email, mobile, comment)
values ('$user', '$email', '$mobile', '$comments')";

/*code to fire query*/
mysqli_query($con,$query);

/*code to redirect to home*/
header('location:contact.php');
 ?>