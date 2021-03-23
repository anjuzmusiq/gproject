<?php 
include("header.php");
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
                                            <li> <a class="active" href="login.php">Login</a> </li>
                                            <li> <a href="registration.php">Registration</a> </li>                                    
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            </div>
                                <div id="contact" class="contact">
        <div class="container">

            <div class="row">

			<div class="col-5"></div>
				<div class="col-7 col-xl-7">
				
                    <form class="contact_bg" method="POST" action="login_action.php">
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <input class="contactus" name="em" placeholder="Email" type="email"required>
                            </div>
							<div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <input class="contactus" name="pass" placeholder="Password" type="password"required>
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
        
           </section>
        </div>
    </header>

<?php 
include("footer.php");
?> 