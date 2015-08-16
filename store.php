<?php

/*
	Store Page
*/

include ('header.php');

?>
	

	<div data-page="store" class="content">
    <?php
              $happy->get_all_stores_with_promos();
              //    echo "<pre>";
     //        print_r($happy->promo);
     //        echo "</pre>";  
            
    ?>

			<div class="item-wrap partner-store">
         	<h1>Partner Stores</h1>
            
            <!--SCROLL-->
            <div class="scroll-pane jspScrollable">

                <?php foreach ($happy->stores as $key => $value) { ?>
                      
                <div class="item">
                    <a href="#" data-toggle="modal" data-target="#promoModal"><img src="<?= API_URL . $happy->stores[$key]->st_image; ?>"/></a>
                    <h4><a href="#"  data-toggle="modal" data-target="#promoModal"><?= $happy->stores[$key]->st_name; ?></a></h4>
                    <p><?= $happy->stores[$key]->st_address; ?></p>
                    <ul>
                        <li><img src="images/favorites.png" /><a href="#">Favorites</a></li>
                        <!-- <li><img src="images/location.png" />3.60km</li> -->
                    </ul>
                    <div class="clr"></div>
                </div>

                <?php } ?>
                
               
            </div>
             <!--SCROLL END-->
         </div>

	</div> <!-- END OF CONTENT WRAPPER -->


<?php include ('footer.php'); ?>