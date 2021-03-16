<?php 
include 'connection.php';
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$dob=$_POST['dob'];
$bg=$_POST['bg'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$query="insert into userinfo set fullname='$firstname' , lastname='$lastname' , dob='$dob' , bg='$bg'  ,  city='$city' , state='$state' , country='$country' , email='$email' , password='$password' , mobile='$mobile' , address='$address' ";
$data=mysqli_query($con , $query);
if ($data)
 {
	header('location:firstpage.php');
}
else
{
	ini_set('display_error', 1);
}
?>