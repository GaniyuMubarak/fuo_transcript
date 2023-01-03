<!-- head starts here -->
<?php include_once('include/head.php'); ?>
	<!-- head ends here -->
	<!-- menu starts here -->
	<?php include_once('include/menus.php'); ?>
	<!-- menu ends here -->
	<!-- header starts here -->
	<?php include_once('include/header.php'); ?>
	<!-- //header ends here -->
	<div class="wthree-offers">
			<div class="offer-bottom"> 
				<div class="col-md-6 offer-bottom-grids login">
                        <h1 class="login-detail text-center mb-3">Existing Application</h1>
                        <h2 class="login_address mb-5 text-center">Login to continue you Application</h2>
                        <?php
                            if(isset($_GET["error"])){
                            if($_GET["error"] == "wronginput" ){
                                echo"<p class ='errormsg'> Wrong Input, kindly check input box below. Thanks! </p>";
                            }else if($_GET["error"] == "stmtfailed" ){
                                echo"<p class ='errormsg'> Something went wrong, try again! </p>";
                            }else if($_GET["error"] == "loginrequest" ){
                                echo"<p class ='errormsg'> There is need to login first before having access to payment page! </p>";
                            }
                            }
                        ?>
                        <form   class="form" action="includes.inc/login.inc.php" method="post">
                            <div class="mb-5 login_input">
                                <label for="formGroupExampleInput" class="form-label">Matric Number : <span>(Applicant should input proper <em>Matric Number</em>)</span> </label>
                                <input type="text" name="matricNumber" class="form-control" id="formGroupExampleInput" placeholder= "Matric Number eg: FUO/17/0001" required>
                            </div>
                            <div class="mb-5 login_input">
                                <label for="formGroupExampleInput2" class="form-label">Email:</label>
                                <input type="email" name="emailAddress" class="form-control" id="formGroupExampleInput2" placeholder="Email Address ganiyumubarak12@gmail.com" required>
                            </div>
                            <input class="btn btn-success" type="submit" value="Login" name="Loginbtn">
                            <p class="create"><a href="registration.php">Click here to create account <i class="fal fa-hand-point-left"></i></a></p>
                    </form>
				</div>
                <div class="col-md-6 offer-bottom-grids">
						<img src="images/fuo_01.jpg" alt="">
				</div>
				<div class="clearfix"> </div>
			</div>
	    </div>	  
			
	<!-- footer starts here -->
	<?php include_once('include/footer.php'); ?>
	<!-- footer ends here -->