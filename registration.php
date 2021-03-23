<?php 
include("header.php");
include("connect.php");
?> 
<!-- end header -->
            <section class="slider_section">
                <div class="banner_main">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2 padding_left0">
                                <div class="menu-area">
                                <div class="limit-box">
                                    <nav class="main-menu">
                                        <ul class="menu-area-main">
                                            <li> <a href="index.php">Home</a> </li>
                                            <li> <a href="login.php">Login</a> </li>
                                            <li> <a class="active" href="registration.php">Registration</a> </li>                                    
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            </div>
    <div id="contact" class="contact">
        <div class="container">

            <div class="row">

			<div class="col-1"></div>
				<div class="col-8 col-xl-10">
				<div class="container-fluid"><br><br><br><br><br><br><br>
                        <div class="row">
                            <div class="col-md-7 padding_center">
                    <form class="contact_bg" method="POST" action="registration_action.php">
                        <div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="contactus" placeholder="First Name" type="text" name="fname" pattern="[a-z A-Z]*" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="contactus" placeholder="Last Name" type="text" name="lname">
                            </div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="contactus" placeholder="Mobile" type="text" name="mobile" pattern="^\d{10}$" required>
                            </div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="contactus" placeholder="Apartment no" type="text" name="apartmentno" pattern="[0-9]*"required>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <input class="contactus" placeholder="Email" type="email" name="email">
                            </div>
							<div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <input class="contactus" placeholder="Password" id="password" type="password" name="password" required pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;">
                            </div>
							<div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <input class="contactus" placeholder="Confirm Password" id="c_password" type="password" name="c_pass"required onchange="return Validate()"required>
                            </div>
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

							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="contactus" placeholder="No of Adult members" type="number" name="adultno">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="contactus" placeholder="No of children" type="number" name="childno">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <button class="send">Submit</button>
                            </div>
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
        
           </section>
        </div>
    </header>

<?php 
include("footer.php");
?> 