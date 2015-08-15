<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/style.css" />
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<title></title>
</head>

<body>
<div id="main-wrapper">
	<div class="login-wrap">
    	<img  class="bottle" src="images/cokeBottle.jpg" />
        <div class="login-form">
        	<img src="images/shopmateLogo.jpg" />
        	<form>
            	<button class="loginFb"></button>
                <label>OR</label>
                <input type="email" name="email"  placeholder="Email Address"/>
                <input type="password" name="password"  placeholder="Password"/>
                <input type="submit" value="Sign in" />
                <a href="#" data-toggle="modal" data-target="#myModal2">Forgot Password?</a>
                <a href="#" data-toggle="modal" data-target="#myModal">Register</a>
            </form>
        </div>
        <div class="clr"></div>
    </div>
    
	<!--MODAL REGISTER-->
    <div class="modal fade login-modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Registration</h4>
                    <button type="button" class="btn btn-default close" data-dismiss="modal">X</button>
                    <div class="clr"></div>
                  </div>
                  <div class="modal-body">
                  		
                        <form>
                        	<!-- <button class="signFb">Sign up with Facebook</button> -->
                            <input type="text" name="mobile-number" placeholder="Mobile Number"><br>
                            <input type="password" name="password" placeholder="Password"><br>
                            <input type="password" name="confirm-password" placeholder="Confirm Password"><br>
                            <input type="text" name="birthday" placeholder="Birthdate"><br>
                           
                            <input type="submit" value="Create Account">
                            
                        </form>
                  </div>
            </div>
          </div>
     </div>
    <!--MODAL END-->

    <!--MODAL REGISTER-->
    <div class="modal fade login-modal" id="myModal2" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Forgot Password</h4>
                    <button type="button" class="btn btn-default close" data-dismiss="modal">X</button>
                    <div class="clr"></div>
                  </div>
                  <div class="modal-body">
                  		
                        <form>
                        	
                            <input type="text" name="mobile-number" placeholder="Enter your Mobile Number or Email Address"><br>
                            <input type="submit" value="Submit">
                            
                        </form>
                  </div>
            </div>
          </div>
     </div>
    <!--MODAL END-->
    
    
</div>
</body>
<script type='text/javascript' src="js/jquery.min.js"></script>
<script type='text/javascript' src="js/bootstrap.min.js"></script>
<script type="text/javascript">  
	$(document).ready(function() {
	  
	});   
</script>

</html>
