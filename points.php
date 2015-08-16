<?php

/*
	Earn Points Page
*/

include ('header.php');

?>
	

	<div data-page="points" class="content">
	<?php
			  $happy->get_all_promos();
			     // echo "<pre>";
        //     print_r($happy->promo);
        //     echo "</pre>";  
            
	?>
		<div class="item-wrap earn-points">
			<h1>Earn Points</h1>
			<div class="points">
				    <img src="<?= API_URL . $happy->promo->c_image_full_promo; ?>"/>
					<div class="points-thumbnails">
					
					  <img src="<?= API_URL . $happy->promo->c_image_tile; ?>"/>
					<h4><?php echo $happy->promo->c_name; ?></h4>
					<p><?php echo $happy->promo->c_desc; ?></p>
					<button  data-toggle="modal" data-target="#promoModal">AVAIL</button>
					</div>
					<div class="clr"></div>
			</div>
		</div>

	</div> <!-- END OF CONTENT WRAPPER -->

	 <!--MODAL-->
    <div class="modal fade promo-modal" id="promoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-body">
                      	 <img src="<?= API_URL . $happy->promo->c_image_redeem; ?>"/>
                     	 <h4><?php echo $happy->promo->c_name; ?></h4>
						<p><?php echo $happy->promo->c_desc; ?></p>
                        <h6>Remaining Time:</h6>
                        <span>141 Days 8 Hours 13 Minutes 35 Seconds</span>
                        <a href="upload.php">UPLOAD RECEIPT TO AVAIL</a>
                  </div>
            </div>
          </div>
     </div>
    <!--MODAL END-->

<?php include ('footer.php'); ?>