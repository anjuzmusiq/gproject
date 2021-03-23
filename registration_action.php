<?php
include ("connect.php");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mobile=$_POST['mobile'];
$appartmentno=$_POST['apartmentno'];
$email=$_POST['email'];
$password=$_POST['password'];
$c_pass=$_POST['c_pass'];
$adultno=$_POST['adultno'];
$childno=$_POST['childno'];
$sql2="SELECT * from home where status='empty' and appartmentno=$appartmentno";
$s2=mysqli_query($con,$sql2);
if(($row=mysqli_fetch_array($s2))==TRUE)
{
$sql3="INSERT INTO login values('$email','$password','owner')";
$result3=mysqli_query($con,$sql3);
$sql2="update home set status='living' where appartmentno=$appartmentno";
$s2=mysqli_query($con,$sql2);
$sql5="INSERT INTO registration(fname,lname,mobile,appartmentno,email,pass,c_pass,adultno,childno,status)values('$fname','$lname','$mobile',$appartmentno,'$email','$password','$c_pass',$adultno,$childno,'living')";
$result5=mysqli_query($con,$sql5);
if($result5==TRUE&&$result1==TRUE)
{
echo"<script>
alert('Registered Successfuly');
window.location='registration.php';
</script>";
}
else
{
echo"<script>alert('Registration failed');
window.location='registration.php';
</script>";
}
}
else
{
echo"<script>alert('House not available');
window.location='registration.php';
</script>";
}
?>