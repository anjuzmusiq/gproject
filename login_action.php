<?php
$con=mysqli_connect("localhost","root","","gproject");
session_start();
$email=$_POST['em'];
$password=$_POST['pass'];
	$_SESSION['email']=$email;
	$sql="select email,password,role from login where email='$email' and password='$password'";
	$result=mysqli_query($con,$sql);
		if( $data=mysqli_fetch_assoc($result))
		{
			$data["role"];
			if($data["role"]=='admin')
			{
				?>
				<script>
				window.location='admin/index.php';
					alert("welcome admin");
				</script>
				<?php
			}
			else if($data["role"]=='owner')
			{
				?>
				<script>
				window.location='owner/index.php';
				alert('welcome owner');
				</script>
				 <?php
			}
		
		}
		else if($email==$data["email"]&&$password!=$data["password"])
			{
				 ?>
				<script>
				window.location='login.php';
				alert('password incorrect');
				</script>
				 <?php
			}
			else if($email!=$data["email"]&&$password==$data["password"])
			{
				 ?>
				<script>
				window.location='login.php';
				alert('email incorrect');
				</script>
				 <?php
			}
			else
			{
				?>
				<script>
				window.location='login.php';
				alert('invalid');
				</script>
				<?php
			}
			
?>