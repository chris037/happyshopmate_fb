<?php

/*
	Engage Page
*/

include ('header.php');

?>
	

	<div data-page="engage" class="content">
     <?php
        $happy->engage();        
     ?>


	 <div class="item-wrap engage">
                <h1>Engage</h1>
                <button class="share"  data-toggle="modal" data-target="#shareModal">SHARE</button>
                <div class="clr"></div>
                
                <?php foreach ($happy->engage as $key => $value) { ?>
                <div class="engageItem">
                	<img width="225px" src="<?= API_URL . $happy->engage[$key]->feature_img; ?>" />
                    <h4><?= $happy->engage[$key]->name; ?></h4>
                    <p><?= $happy->engage[$key]->description; ?></p>
                    <a href="<?= $happy->engage[$key]->link; ?>" class="<?= ($happy->engage[$key]->link == 'https://www.spotify.com/ph/') ? 'launchSpotify' : 'visitFb' ;?>"></a>
                    <div class="clr"></div>
                </div>

                <?php } ?>
               

               <div class="clr"></div>
         </div>
			

	</div> <!-- END OF CONTENT WRAPPER -->
      <!--MODAL-->
    <div class="modal fade share-modal" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-body">
                       <h3>Share it!</h3>
                       <p>Share your redeemed reward via:</p><br />
                       <p>[CODE HERE FOR SHARE PLUGIN]</p>
                  </div>
            </div>
          </div>
     </div>
    <!--MODAL END-->


<?php include ('footer.php'); ?>