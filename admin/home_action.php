<?php 
include("header.php");
include ("connect.php");
$appartmentno=$_POST['appartmentno'];
$sql5="INSERT INTO home values($appartmentno,'empty')";
$result5=mysqli_query($con,$sql5);
if($result5==TRUE)
{
echo"<script>
alert('Appartment no added');
window.location='home.php';
</script>";
}
else
{
echo"<script>alert('Appartment adding failed');
window.location='home.php';
</script>";
}
?>