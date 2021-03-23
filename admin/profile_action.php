<?php 
include("header.php");
session_start();
include ("connect.php");
$email=$_POST['email'];
$sql1="SELECT * from registration where email='$email'";
$s1=mysqli_query($con,$sql1);
if($row=mysqli_fetch_array($s1))
{
$id=$row[0];
$fname=$row[1];
$lname=$row[2];
$mobileno=$row[3];
$appartmentno=$row[4];
$email=$row[5];
$pass=$row[6];
$c_pass=$row[7];
$adultno=$row[8];
$childno=$row[9];
}
else
{echo"<script>
alert('Owner Not found');
window.location='profile.php';
</script>";
}
?>

<!-- end header -->
            <section class="slider_section">
                <div class="banner_main">
                       <div id="contact" class="contact">
        <div class="container">

            <div class="row">

			<div class="col-1"></div>
				<div class="col-8 col-xl-10">
				<div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 padding_center">

<form class="contact_bg" method="POST" action="profile_action2.php">
                        <div class="row">                        </div>
<table class="col-md-12 padding_center">
  <thead>
    <tr>
      <th>Owner Id</th>     
	  <td><?php echo $id;?></td>
	</tr>
	<tr>
      <th>First Name</th>
	  <td><input class="contactus" placeholder="First Name" type="text" name="fname" pattern="[a-z A-Z]*" required value="<?php echo $fname;?>"></td>
	</tr>
	<tr>
      <th>Last Name</th>      
	  <td> <input class="contactus" placeholder="Last Name" type="text" name="lname" value="<?php echo $lname;?>"></td>
	</tr>
	<tr>
      <th>Mobile No</th>	  
	  <td><input class="contactus" placeholder="Mobile" type="text" name="mobile" pattern="^\d{10}$" required value="<?php echo $mobileno;?>"></td>
	</tr>
	<tr>
      <th>Appartment No</th>	  
	  <td><?php echo $appartmentno;?></td>
	</tr>
	<tr>
      <th>Email</th>
	  <td><?php echo $email;?></td>
	</tr>	
	<tr>
      <th>Password</th>
	  <td><input class="contactus" placeholder="Password" id="password" type="password" name="password" required pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" value="<?php echo $pass;?>"></td>
	</tr>
	<tr>
	  <th>Confirm Password</th>	  
	  <td><input class="contactus" placeholder="Confirm Password" id="c_password" type="password" name="c_pass"required onchange="return Validate()"required value="<?php echo $c_pass;?>"></td>
	</tr>
	<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("c_password").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
      <th>Number of Adults</th>	  
	  <td><input class="contactus" placeholder="No of Adult members" type="number" name="adultno" value="<?php echo $adultno;?>"></td>
	</tr></tr>
      <th>Number of Children</th>	  
	  <td><input class="contactus" placeholder="No of children" type="number" name="childno" value="<?php echo $childno;?>"></td>
	</tr>
  </thead>
	 </table>
	     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <button class="send">Submit</button>
         </div>
				</form>
				</div>
              </div>
		  </div>
                </div>
            </div>

        </div>
    </div>
                </div>
                        </div>
                    </div>
                </div>
        
           </section>
        </div>
    </header>
<?php 
include("footer.php");
?> 