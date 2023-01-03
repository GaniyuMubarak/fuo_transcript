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
                        <h1 class="login-detail text-center">Pre Registration</h1>
                        <?php
                            if(isset($_GET["error"])){
                            if($_GET["error"] == "emptyinput" ){
                                echo"<p class ='errormsg'> Fill in all fields! </p>";
                            }else if($_GET["error"] == "userhasbeentaken" ){
                                echo"<p class ='errormsg'> Users has been taken! Please, check your Email and Matric and provide valid one. Thanks! </p>";
                            }else if($_GET["error"] == "stmtfailed" ){
                                echo"<p class ='errormsg'> Something went wrong, try again! </p>";
                            }else if($_GET["error"] == "none" ){
                                echo"<p class ='successmsg'> Your account has been created! </p>";
                            }else if($_GET["error"] == "notbeingchecked" ){
                                echo"<p class ='errormsg'> You need to fill the boxes below! </p>";
                            }
                            }
                        ?>
                        <form action="includes.inc/registration.inc.php" class="form" method="post">
                            <div class="mb-5 login_input">
                                <label for="formGroupExampleInput" class="form-label">Transcript Type :  <span>(<em>Please choose approprate Transcript type, it'll be used during the Registration</em>)</span></label>
                                <select class="" name="type" required>
                                <option selected disabled value="">Choose Transcript Type eg: <em>FOREIGN OR LOCAL</em>...</option>
                                <option value="Foreign">Foreign</option>
                                <option value="Local">Local</option>
                                </select>
                            </div>
                            <div class="mb-5 login_input">
                                <label for="formGroupExampleInput" class="form-label"> Highest Level of study:</label>
                                <select class="" name="hls" required>
                                <option selected disabled value="">Choose HLS eg: <em>GRADUATE OR UNDERGRADUATE</em>...</option>
                                <option value="Graduate">Graduate</option>
                                <option value="Undergraduate">Undergraduate</option>
                                </select>
                            </div>
                            <div class="mb-5 login_input">
                                <label for="formGroupExampleInput" class="form-label">FullName:</label>
                                <input type="text" name="fullName" class="form-control" id="formGroupExampleInput" placeholder= "eg Ganiyu Mubarak Ayinla" required>
                            </div>
                            <div class="mb-5 login_input">
                                <label for="formGroupExampleInput" class="form-label">Matric Number:</label>
                                <input type="text" name="matricNumber" class="form-control" id="formGroupExampleInput" placeholder= "Matric Number eg: FUO/17/0001" required>
                            </div>
                            <div class="mb-5 login_input">
                                <label for="formGroupExampleInput" class="form-label">PhoneNumber:</label>
                                <input type="text" name="phoneNumber" class="form-control" id="formGroupExampleInput" placeholder= "09073240313" required>
                            </div>
                            <div class="mb-5 login_input">
                                <label for="formGroupExampleInput2" class="form-label">Email:  <span>( <em>Please use a valid email</em>)</span></label>
                                <input type="email" name="emailAddress" class="form-control" id="formGroupExampleInput2" placeholder="Email Address ganiyumubarak12@gmail.com" required>
                            </div>
                            <input class="btn btn-success" type="submit" value="Create an Account" name="Registrationbtn">
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