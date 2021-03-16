<?php 

include 'connection.php';
$email=$_POST['username'];
$password=$_POST['password'];
$query="select * from userinfo where email='$email' and password='$password' ";
$data=mysqli_query($con , $query);
if ($data) {
header('location:privatehospitals.php');
}
?>
