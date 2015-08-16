<?php

/*
	Accounts Page
*/

include ('header.php');

?>
	

	<div data-page="accounts" class="content">

			<div class="item-wrap account">
                <h1>My Account</h1>
                <a href="logout.php" class="logoutBtn">LOGOUT</a> 
                <div class="clr"></div>
                 <?php
            //   echo "<pre>";
            // print_r($happy->user);
            // echo "</pre>";  
         ?>
                <div class="info-wrap">
                	<?php $happy->get_avatar();?>
                	<h2><?php echo $happy->get_fullname(); ?></h2>
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
                                <td><?php echo $happy->user->s_contact; ?></td>
                                <td><strong>Address</strong></td>
                                <td><?php echo $happy->user->s_address; ?></td>
                            </tr>
                            <tr>
                            	<td><strong>Barangay</strong></td>
                                <td><?php echo $happy->user->s_barangay; ?></td>
                                <td><strong>City</strong></td>
                                <td><?php echo $happy->user->s_city; ?></td>
                            </tr>
                            <tr>
                            	<td><strong>Postal Code</strong></td>
                                <td><?php echo $happy->user->s_postal_code; ?></td>
                                <td><strong>Email Address</strong></td>
                                <td><?php echo $happy->user->s_email; ?></td>
                            </tr>
                            <tr>
                            	<td><strong>Birthdate</strong></td>
                                <td><?php echo $happy->user->s_birthday; ?></td>
                                <td><strong>Gender</strong></td>
                                <td><?php echo $happy->user->s_gender; ?></td>
                            </tr>
                             <tr>
                            	<td><strong>Parental Status</strong></td>
                                <td><?php echo $happy->user->s_parental; ?></td>
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
     <!--MODAL-->
    <div class="modal fade edit-modal" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-body">
                        <h2>EDIT PROFILE</h2>
                        <form>
                            <input type="text"  placeholder="Name" value=""/>
                            <input type="text"  placeholder="Adress"/>
                            <input type="text"  placeholder="Barangay"/>
                            <input type="text" class="city" placeholder="City"/>
                            <input type="text" class="postal" placeholder="Postal Code"/>
                            <input type="email"  placeholder="Email Address"/>
                            <input type="text"  placeholder="Birthdate"/>
                            <select>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                            <select>
                                <option>Parental Status</option>
                            </select>
                            <input type="submit" value="Update" />
                        </form>
                  </div>
            </div>
          </div>
     </div>
    <!--MODAL END-->
    
    <!--MODAL-->
    <div class="modal fade change-modal" id="changeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-body">
                        <h2>CHANGE PASSWORD</h2>
                        <form>
                            <input type="text"  placeholder="New Password"/>
                            <input type="text"  placeholder="Confirm New Password"/>
                            <input type="submit" value="Save" />
                        </form>
                  </div>
            </div>
          </div>
     </div>
    <!--MODAL END-->


<?php include ('footer.php'); ?>