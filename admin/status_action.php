<?php
include ("connect.php");
$appartmentno=$_POST['appartmentno'];
$sql5="update home set status='empty' where appartmentno=$appartmentno";
$result5=mysqli_query($con,$sql5);
$sql2="update registration set status='left' where appartmentno=$appartmentno";
$result2=mysqli_query($con,$sql2);
if($result5==TRUE&&$result2==TRUE)
{
echo"<script>
alert('Updation Successfull');
window.location='status.php';
</script>";
}
else
{
echo"<script>alert('Updation failed');
window.location='status.php';
</script>";
}
?>