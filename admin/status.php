<?php 
include("header.php");
?> 
<!-- end header -->
            <section class="slider_section">
                <div class="banner_main">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 padding_left0">
                               
                            </div>
                                <div id="contact" class="contact">
        <div class="container">

            <div class="row">

			<div class="col-5"></div>
				<div class="col-7 col-xl-7">
				
                    <form class="contact_bg" method="POST" action="status_action.php">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <input class="contactus" placeholder="Apartment no" type="text" name="appartmentno" pattern="[0-9]*"required>
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