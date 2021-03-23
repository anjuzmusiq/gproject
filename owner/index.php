<?php 
include("header.php");
session_start();
include 'connect.php';
$email=$_SESSION['email'];
?> 

<!-- end header -->
            <section class="slider_section">
                <div class="banner_main">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2 padding_left0">

                            </div>
                                <div class="text-bg">
                                    <h1>Owner Panel</h1>
                                    <span>Welcome <?php echo $email?></span>
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