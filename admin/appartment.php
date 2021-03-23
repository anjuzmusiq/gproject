<?php 
include("header.php");
?> 
<!-- end header -->
            <section class="slider_section">
                <div class="banner_main">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2 padding_left0">
                               
                            </div>
                                <div id="contact" class="contact">
        <div class="container">

            <div class="row">

			<div class="col-2"></div>
				<div class="col-10 col-xl-10">
				
                    <form class="contact_bg" method="POST" action="appartment_action.php">
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                               <input class="contactus" placeholder="Apartment no" type="text" name="apartmentno" pattern="[0-9]*"required>
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