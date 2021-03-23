<?php 
include("header.php");
include ("connect.php");
?> 

<!-- end header -->
            <section class="slider_section">
                <div class="banner_main">
                    <div class="container-fluid"><br><br><br><br><br>
                        <div class="row">
						<div class="col-2"></div>
                            <div class="col-md-9 padding_center">

                        
<table>
  <thead>
    <tr>
      <th width="500">House no</th>
      <th width="500">Status</th>

	  </tr>
  </thead>
  <?php
$sql1="SELECT * from home";
$s1=mysqli_query($con,$sql1);
while(($row=mysqli_fetch_array($s1))==TRUE)
{
?>
  <tbody>
    <tr>
      <td width="500"><?php echo $row[0];?></td>
      <td width="500"><?php echo $row[1];?></td>
	  </tr>
	 </tbody>
<?php
}
?>
	 </table>
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