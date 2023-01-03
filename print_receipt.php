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
	button{
		border-width:2px;
		border-color:red;
		border-style: solid;
		padding:10px 20px;
		background:red;
		color:white;
		font-size:18px;
		text-transform: uppercase;
		outline:none;
		border:none;
		border-bottom-left-radius: 200px;
		border-top-right-radius: 200px;
	}

	.TApp-btn{
		background:green;
	}

	.print-btn{
		width:15%;
	}

	.header-2 .sub-header h4{
		text-transform: capitalize;
	}

	@media print{
		button{
			display:none;
		}
	}
</style>
</head>
<body>
<div class="header" style="text-align: center; margin-top:50px; border-bottom:solid; border-width:3px; border-color:gray;">
    <img src="images/bg2.png" alt="" class="img_fuo_o2" style="min-width: 5%;">
   <h1 style="font-weight: 700; line-height: 2;">FOUNTAIN UNIVERSITY OSOGBO, OSUN STATE.</h1>
   <h3 style="line-height: 3;">P.M.B 4491, Oke-Osun, Osogbo.</h3>
   <h3 style="margin-bottom:10px">Motto: Faith, Knowledge and Service</h3>
</div>
<h2 style="text-align: center; font-weight: 700; margin-bottom:50px; margin-top:50px">TRANSCRIPT PAYMENT RECEIPT</h2>
<div class="header-2" style="display:flex; justify-content:space-around; border-bottom:solid; border-width:3px; border-color:gray;">
<div class="sub-header">
    <h4 style="font-family: sans; font-weight:500; font-size:25px"> <em> Name: <?php if(isset($_SESSION["matricNumber"])){ echo $_SESSION["FullName"]; }?> </em></h4><br/>
    <h4 style="font-family: sans; font-weight:500; font-size:25px"> <em> Matric No: <?php if(isset($_SESSION["matricNumber"])){ echo $_SESSION["matricNumber"]; }?> </em></h4><br/>
    <h4 style="font-family: sans; font-weight:500; font-size:25px"> <em> Transcript Type: <?php if(isset($_SESSION["matricNumber"])){ echo $_SESSION["type"]; }?> </em></h4><br/>
    <h4 style="font-family: sans; font-weight:500; font-size:25px"> <em> Ref No: <?php if(isset($_SESSION["matricNumber"])){ echo $_SESSION["refNo"]; }?> </em></h4>
</div>
<div class="sub-header">
    <h4 style="font-family: sans; font-weight:500; font-size:25px"> <em> Date Paid: <?php if(isset($_SESSION["matricNumber"])){ echo $_SESSION["applyDate"]; }?> </em></h4>
</div>
</div>
<div class="content" style="margin-top:50px">
<h4 style="font-family: Algerian; font-weight:700; font-size:20px; margin-left:5%"> <em> Dear <?php if(isset($_SESSION["matricNumber"])){ echo $_SESSION["FullName"]; }?>, </em></h4><br/>
<div style="margin-left:10%">
<h3>Sequel to the payment of N<?php if(isset($_SESSION["matricNumber"])){ echo $_SESSION["paidAmount"]; }?> paid on <?php if(isset($_SESSION["matricNumber"])){ echo $_SESSION["applyDate"]; }?>, you are hereby requested to follow the procedure below:</h3><br/>
<h3> Click on Red button below <b>(Print) to print your receipt</b></h3><br/>
<h3> Click on Green button below <b>(Complete Transcript App)</b> to Complete your Transcript Application.</h3>
</div>
<div class="btn" style="display:flex; justify-content:space-between; margin-top:2%; margin-left:10%; margin-right:10%;">
<button type="submit" data-dismiss="modal" aria-hidden="true" class="print-btn" onclick="printReceipt()">Print</button>
<form action="application.php" method="post">
<button type="submit" data-dismiss="modal" aria-hidden="true" class="TApp-btn">Complete Transcript Application</button>
</form>
</div>
</div>
</body>
<script>
	function printReceipt(){
		var restorepage = document.body.innerHTML;
		var printreceipt = document.getElementById().innerHTML; 
		document.body.innerHTML =  printreceipt;
		window.print();
		document.body.innerHTML = restorepage;
	}
</script>
</html>