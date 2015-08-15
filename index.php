<?php

/*
	Home Page
*/

include ('header.php');

?>

	<div data-page="home" class="content">

		<div id="banner-fade">
            <ul class="bjqs">
              <li><img src="images/banner/banner01.jpg"></li>
              <li><img src="images/banner/banner02.jpg"></li>
            </ul>
         </div>
         
         <!--BANNER BOTTOM-->
         <div class="bottom-shadow"></div>
         <!--BANNER BOTTOM END-->
         
         <!--USER-->
         <div class="user-wrap">
                <img src="images/user.jpg" />
                <h1>Juan Dela Cruz</h1>
                <h5>Points Earned</h5>
                <h3>358,989 pts</h3>
                <div class="clr"></div>
         </div>
         <!--USER END-->
         
         <!--EARN POINTS-->
         <div class="earn-points-wrap">
         	<div class="headings">
            	<h6>Earn Points</h6>
                <div class="triangle"></div>
            </div>
            <div class="enterCode">
            	<a href="#" data-toggle="modal" data-target="#enterCodeModal">
                	<img class="icons" src="images/enterCodeIcon.png" />
                    <p>TAP TO ENTER CODE</p>
                    <img class="arrow-right" src="images/arrowIcon.png" />
                </a>
                <div class="clr"></div>
            </div>
            <div class="scanReceipt">
            	<a href="#" data-toggle="modal" data-target="#uploadModal">
                	<img class="icons" src="images/scanIcon.png" />
                    <p>TAP TO UPLOAD RECEIPT</p>
                    <img class="arrow-right" src="images/arrowIcon.png" />
                </a>
                <div class="clr"></div>
            </div>
         </div>
         <!--EARN POINTS END-->
	</div>

<?php include ('footer.php'); ?>