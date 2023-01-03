<?php
	  session_start();
	  if(!isset($_SESSION["matricNumber"])){
		  header("location: login.php?error=loginrequest");
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
	.feedback{
		border-style: solid;
		border-color:gray;
		border-width: 1px;
		/* width:35%; */
		/* margin:auto; */
		margin-left:20%;
		margin-right:20%;
		border:none;
		height: 100px;
		margin-bottom:30px;
		padding: 30px 5px 0px 5px;
		background:tomato;
	}

	.feedback h4 span{
		line-height: 1.5;
		font-size:23px;
		padding-left:5px;
		color:white;
	}

	.feedback h4 i{
		font-size:28px;
		font-weight: 700;
		color:greenyellow;
	}

	.login .form input[type="text"], .login .form input[type="email"], .login .form select, .login .form textarea, .login .form input[type="date"]{
      border-color:green;
      padding:25px 20px;
      font-size:20px;
	  width:50%;
	  margin-bottom: 2%;
  }
  .login{
	  margin-left: 38%;
	  margin-top:-4%;
  }
</style>
</head>
<body>
  <div class="agileits-modal modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel"><i class="fa fa-map-marker" aria-hidden="true"></i> Congrats!</h4>
				</div>
				<div class="modal-body modal-body-sub"> 
					<h4>An Email will be sent to the Address you provided</h4><br>
					<form action="emailMessage.php" method="post">
						<button type="submit" class="close2" data-dismiss="modal" aria-hidden="true" name= "emailMessage">Send me mail</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script>
		$('#myModal88').modal('show');
	</script> 
<div class="header" style="text-align: center; margin-top:50px; border-bottom:solid; border-width:3px; border-color:gray;">
	<img src="images/bg2.png" alt="" class="img_fuo_o2" style="min-width: 5%;">
    <h1 style="font-weight: 700; line-height: 2;">FOUNTAIN UNIVERSITY OSOGBO, OSUN STATE.</h1>
	<div class="feedback">
		<h4><i class="fa fa-map-marker" aria-hidden="true"></i> <span>We're reviewing your application request! Please expect feedback at your Email Address within 24 hours</span></h4>
	</div>
</div>
	<h2 style="text-align: center; font-weight: 700; margin-bottom:50px; margin-top:50px">APPLICANT DETAILS</h2>
	<div class="wthree-offers">
			<div class="offer-bottom"> 
				<div class="offer-bottom-grids login">
                        <form action="includes.inc/application.inc.php" method="post" id="form" class="form">
								<div class="mb-5 login_input">
									<input type="text" name="transcript_type" value ='<?php if(isset($_SESSION["matricNumber"])){ echo $_SESSION["type"]; }?>' class="form-control input" id="fullName" required readonly>
								</div>
								<div class="mb-5 login_input">
									<input type="text" name="fullName" value ='<?php if(isset($_SESSION["matricNumber"])){ echo $_SESSION["FullName"]; }?>' class="form-control input" id="fullName" required readonly>
								</div>
								<div class="mb-5 login_input">
									<input type="text" name="matricNumber" value= '<?php if(isset($_SESSION["matricNumber"])){ echo $_SESSION["matricNumber"]; }?>' class="form-control input" id="matricNumber" required readonly>
								</div>
								<div class="mb-5 login_input">
									<input type="text" name="phoneNumber" value = '<?php if(isset($_SESSION["matricNumber"])){ echo $_SESSION["phoneNumber"]; }?>' class="form-control input" id="phoneNumber" required readonly>
								</div>
								<div class="mb-5 login_input">
									<input type="text" name="emailAddress" value= '<?php if(isset($_SESSION["matricNumber"])){ echo $_SESSION["emailAddress"]; }?>' class="form-control input" id="emailAddress" required readonly>
								</div>
								<div class="mb-5 login_input">
									<input type="text" name="programmes" value='<?php if(isset($_SESSION["matricNumber"])){ echo $_SESSION["HLS"]; }?>' class="form-control input" id="matricNumber" required readonly>
								</div>
                    </form>
				</div>
				<div class="clearfix"> </div>
			</div>
	    </div>
	
</body>
</html>
    
	
