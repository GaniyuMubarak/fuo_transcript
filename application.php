<?php
	  session_start();
	  if(!isset($_SESSION["matricNumber"])){
		  header("location: dashboard.php?error=loginrequest");
	  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Fountain Unversity Transcript Application</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
<link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider --> 
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts --> 
<script src="js/owl.carousel.js"></script>  
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({ 
	  autoPlay: 3000, //Set AutoPlay to 3 seconds 
	  items :4,
	  itemsDesktop : [640,5],
	  itemsDesktopSmall : [480,2],
	  navigation : true
 
	}); 
}); 
</script>
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();  
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10, 
                zIndex: 999
            });
        });
    });
</script>
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
<script src="js/bootstrap.js"></script>	
<style>
	input.invalid {
	  background-color: #ffdddd;
	}

	/* Hide all steps by default: */
.step{
    display:none;
}
.step.active{
    display:block;
}
button.next-btn, button.previous-btn, button.submit-btn{
    float:right;
    margin:55px 0px 0px 0px;
    padding:10px 30px;
    border:none;
    outline:none;
    background-color:rgb(112, 241, 140);
    font-family: montserrat;
    font-size:18px;
    cursor:pointer;
}

button.previous-btn{
    float:left;
}
.login .form label{
      font-size:20px;
      font-weight: 700;
  }
  
  .login .form label span{
      color:tomato;
  }

  .login .form input[type="text"], .login .form input[type="email"], .login .form select, .login .form textarea, .login .form input[type="date"]{
      border-color:green;
      padding:25px 20px;
      font-size:20px;
  }

  .login .form select{
    width:100%;
    padding:20px 20px;
    font-size:20px;
    border-color: green;
  }
  .login .form select:focus{
    color:green;
  }

  .login .form ::placeholder{
      font-weight: 700;
      font-size:20px;
  }

  .login .form .btn{
      margin:50px 50% 50px 30%;
      width: 40%;
      font-size: 25px;
  }
  .login .form p{
      font-size: 25px;
      margin-left:30%;
      cursor: pointer;
      color:gray;
  }
  .login .form p:hover{
      color:green;
  }

  .login .login_input{
    line-height: 3;
    margin-bottom: 5px;
  }
  .login .login-detail{
    line-height: 3;
    margin-bottom: 5px;
  }
  .login img{
	  width:70px;
	  margin-left:48%;
	  transform: translateY(-35px);
  }
  .login h2{
	  margin-top:-25px;
  }

  </style>
</head>
<body>
		<div class="wthree-offers">
			<div class="offer-bottom"> 
				<div class="col-md-12 offer-bottom-grids login">
					<img src="images/bg2.png" alt="" class="img_fuo_o2">
                        <h2 class="login-detail text-center">Transcript Registration Page</h2>
                        <form action="includes.inc/application.inc.php" method="post" id="form" class="form">
							<div class="step step1 active">
								<div class="mb-5 login_input">
									<label for="formGroupExampleInput2" class="form-label">Transcript Type:</label>
									<input type="text" name="transcript_type" value ='<?php if(isset($_SESSION["matricNumber"])){ echo $_SESSION["type"]; }?>' class="form-control input" id="fullName" required readonly>
								</div>
								<div class="mb-5 login_input">
									<label for="formGroupExampleInput2" class="form-label">FullName:</label>
									<input type="text" name="fullName" value ='<?php if(isset($_SESSION["matricNumber"])){ echo $_SESSION["FullName"]; }?>' class="form-control input" id="fullName" required readonly>
								</div>
								<div class="mb-5 login_input">
									<label for="formGroupExampleInput2" class="form-label">Date of Birth:</label>
									<input type="date" name="DOB" class="form-control input" id="DOB" required>
								</div>
								<div class="mb-5 login_input">
									<label for="formGroupExampleInput" class="form-label">Gender:</label>
									<select class="input" name="gender" required>
									<option selected disabled value="">Select your gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									</select>
								</div>
								<div class="mb-5 login_input">
									<label for="formGroupExampleInput2" class="form-label">Nationality:</label>
									<input type="text" name="nationality" class="form-control input" id="nation" required>
								</div>
								<button type="button" class="next-btn">Next</button>
								<!-- <input type="submit" value="Sign up"> -->
							</div>
							<div class="step step2">
								<div class="mb-5 login_input">
									<label for="formGroupExampleInput2" class="form-label">Matric Number:</label>
									<input type="text" name="matricNumber" value= '<?php if(isset($_SESSION["matricNumber"])){ echo $_SESSION["matricNumber"]; }?>' class="form-control input" id="matricNumber" required readonly>
								</div>
								<div class="mb-5 login_input">
									<label for="formGroupExampleInput2" class="form-label">Phone Number:</label>
									<input type="text" name="phoneNumber" value = '<?php if(isset($_SESSION["matricNumber"])){ echo $_SESSION["phoneNumber"]; }?>' class="form-control input" id="phoneNumber" required readonly>
								</div>
								<div class="mb-5 login_input">
									<label for="formGroupExampleInput2" class="form-label">Email Address:</label>
									<input type="text" name="emailAddress" value= '<?php if(isset($_SESSION["matricNumber"])){ echo $_SESSION["emailAddress"]; }?>' class="form-control input" id="emailAddress" required readonly>
								</div>
								<div class="mb-5 login_input">
                                	<label for="formGroupExampleInput" class="form-label">College:</label>
									<select class="input" name="college" id="slct1" onchange="populate(this.id, 'slct2')" required>
									<option selected disabled value=""> -- Choose your College -- </option>
									<option value="cobmhes">College of Basic Medical & Health Sciences</option>
									<option value="comass">College of Management and Social Sciences</option>
									<option value="conas">College of Nutural and Applied Sciences</option>
									<option value="law">College of Law</option>
									</select>
                            	</div>
								<div class="mb-5 login_input">
									<label for="formGroupExampleInput" class="form-label">Department:</label>
									<select class="input" name="department" id="slct2" required>
									<option selected disabled value="">-- Choose your Department -- </option>
									
									</select>
                            	</div>
								<button type="button" class="previous-btn">Prev</button>
								<button type="button" class="next-btn">Next</button>
								<!-- <input type="submit" value="Sign up"> -->
							</div>
							<div class="step step3">
								<div class="mb-5 login_input">
                                	<label for="formGroupExampleInput" class="form-label">Mode of Admission:</label>
									<select class="input" name="modeOfAdmission" required>
									<option selected disabled value=""> -- Select your Mode of Admission -- </option>
									<option value="UTME">UTME</option>
									<option value="Direct Entry">Direct Entry</option>
									</select>
                            	</div>
								<div class="mb-5 login_input">
									<label for="formGroupExampleInput2" class="form-label">Highest Level of Study:</label>
									<input type="text" name="programmes" value='<?php if(isset($_SESSION["matricNumber"])){ echo $_SESSION["HLS"]; }?>' class="form-control input" id="matricNumber" required readonly>
								</div>
								<div class="mb-5 login_input">
                                	<label for="formGroupExampleInput" class="form-label">Year of Admission:</label>
									<select class="input" name="yearOfAdmission" required>
									<option selected disabled value=""> -- Select Session -- </option>
									<option value="2010/2011">2010/2011</option>
									<option value="2011/2012">2011/2012</option>
									<option value="2012/2013">2012/2013</option>
									<option value="2013/2014">2013/2014</option>
									<option value="2014/2015">2014/2015</option>
									<option value="2015/2016">2015/2016</option>
									<option value="2016/2017">2016/2017</option>
									<option value="2017/2018">2017/2018</option>
									</select>
                            	</div>
								<div class="mb-5 login_input">
                                	<label for="formGroupExampleInput" class="form-label">Year of Graduation:</label>
									<select class="input" name="yearOfGraduation" required>
									<option selected disabled value=""> -- Select Session -- </option>
									<option value="2010/2011">2010/2011</option>
									<option value="2011/2012">2011/2012</option>
									<option value="2012/2013">2012/2013</option>
									<option value="2013/2014">2013/2014</option>
									<option value="2014/2015">2014/2015</option>
									<option value="2015/2016">2015/2016</option>
									<option value="2016/2017">2016/2017</option>
									<option value="2017/2018">2017/2018</option>
									</select>
                            	</div>
								<button type="button" class="previous-btn">Prev</button>
								<button type="button" class="next-btn">Next</button>
								<!-- <input type="submit" value="Sign up"> -->
							</div>
							<div class="step step4">
							<div class="mb-5 login_input">
                                	<label for="formGroupExampleInput" class="form-label">Year of Award:</label>
									<select class="input" name="yearOfAward" required>
									<option selected disabled value=""> -- Select Year of Award -- </option>
									<option value="2010/2011">2010/2011</option>
									<option value="2011/2012">2011/2012</option>
									<option value="2012/2013">2012/2013</option>
									<option value="2013/2014">2013/2014</option>
									<option value="2014/2015">2014/2015</option>
									<option value="2015/2016">2015/2016</option>
									<option value="2016/2017">2016/2017</option>
									<option value="2017/2018">2017/2018</option>
									</select>
                            	</div>
								<div class=" mb-5 form-floating login_input">
									<label for="floatingTextarea2">Degree Awarded with Date</label>
									<textarea class="form-control input" placeholder="Degree Awarded with Date...." id="floatingTextarea2" name = "degreeAward" style="height: 100px"></textarea>
								</div>
								<div class=" mb-5 form-floating login_input">
									<label for="floatingTextarea2">Purpose of Requesting for Transcript</label>
									<textarea class="form-control input" placeholder="Purpose of Requesting for Transcript...." id="floatingTextarea2" name = "purposeOfTranscript" style="height: 100px"></textarea>
								</div>
								<div class=" mb-5 form-floating login_input">
									<label for="floatingTextarea2">Address To</label>
									<textarea class="form-control input" placeholder="Write a Valid Address to send Transcript to...." id="floatingTextarea2" name = "addressTo" style="height: 100px"></textarea>
								</div>
								<button type="button" class="previous-btn">Prev</button>
								<button type="submit" class="submit-btn" name = "applicationBtn">Submit</button>
								<!-- <input type="submit" value="Sign up"> -->
							</div>
                    </form>
				</div>
				<div class="clearfix"> </div>
			</div>
	    </div>
	<!-- add-products -->

  <script>
	  
  </script>
	
	<!-- //footer -->		
	<!-- footer starts here -->
	<?php include_once('include/footer.php'); ?>
	<!-- footer ends here -->