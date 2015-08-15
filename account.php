<?php

/*
	Accounts Page
*/

include ('header.php');

?>
	

	<div data-page="accounts" class="content">

			<div class="item-wrap account">
                <h1>My Account</h1>
                <button class="logoutBtn">LOGOUT</button> 
                <div class="clr"></div>
                <div class="info-wrap">
                	<img src="images/accountProfile.jpg" />
                	<h2>JUAN DELA CRUZ</h2>
                    <button class="editBtn" data-toggle="modal" data-target="#editModal">EDIT PROFILE</button>
                    <button class="changeBtn" data-toggle="modal" data-target="#changeModal">CHANGE PASSWORD</button>
                    <div class="clr"></div>
                </div>
                
                <h2>PERSONAL INFORMATION</h2>
                
                 <div class="info-wrap">
                	<table cellpadding="0" cellspacing="0" width="100%">
                    	<tbody>
                        	<tr>
                            	<td><strong>Mobile Number</strong></td>
                                <td>04934993485</td>
                                <td><strong>Address</strong></td>
                                <td>Manila</td>
                            </tr>
                            <tr>
                            	<td><strong>Barangay</strong></td>
                                <td>Pinagkaisahan</td>
                                <td><strong>City</strong></td>
                                <td>Quezon City</td>
                            </tr>
                            <tr>
                            	<td><strong>Postal Code</strong></td>
                                <td>032939</td>
                                <td><strong>Email Address</strong></td>
                                <td>juandelacruz@gmail.com</td>
                            </tr>
                            <tr>
                            	<td><strong>Birthdate</strong></td>
                                <td>June 12, 1989</td>
                                <td><strong>Gender</strong></td>
                                <td>Male</td>
                            </tr>
                             <tr>
                            	<td><strong>Parental Status</strong></td>
                                <td>Wihout Children</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="clr"></div>
                </div>
                
                <h2>SAVED LOCATIONS</h2>
                
                <div class="info-wrap">
                	 <div class="savedLocations">
                     	<h4>MINISTOP West Insula </h4>
                        <p>West Insula Condominium 135 West Ave. Brgy. Bungad, Quezon City</p>
                     </div>
                	 <div class="clr"></div>
                </div>
                
            
               
         </div>

	</div> <!-- END OF CONTENT WRAPPER -->


<?php include ('footer.php'); ?>