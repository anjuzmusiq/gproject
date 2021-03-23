<?php
include ("connect.php");
session_start();
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mobile=$_POST['mobile'];
$email=$_SESSION['email'];
$password=$_POST['password'];
$c_pass=$_POST['c_pass'];
$adultno=$_POST['adultno'];
$childno=$_POST['childno'];
$sql5="update login set password='$password' where email='$email'";
$result5=mysqli_query($con,$sql5);
$sql2="update registration set fname='$fname',lname='$lname',mobile='$mobile',appartmentno=$appartmentno,email='$email',pass='$password',c_pass='$password',adultno=$adultno,childno=$childno where email='$email'";
$result2=mysqli_query($con,$sql2);
if($result5==TRUE&&$result2==TRUE)
{
echo"<script>
alert('Updation Successfull');
window.location='profile.php';
</script>";
}
else
{
echo"<script>alert('Updation failed');
window.location='profile.php';
</script>";
}
?>