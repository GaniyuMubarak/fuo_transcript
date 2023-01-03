<?php
	session_start();
	if(!isset($_SESSION["matricNumber"])){
		header("location: login.php?error=loginrequest");
	}

?>
<!-- head starts here -->
<?php include_once('include/head.php'); ?>
<!-- head ends here -->

	<!-- header -->
	<div class="header">
		<div class="w3ls-header"><!--header-one--> 
			<div class="w3ls-header-left">
				<p><a href="#fuo.edu.ng"><i class="fa fa-book" aria-hidden="true"></i> Fountain University </a></p>
			</div>
			<div class="w3ls-header-right">
				<ul> 
					<li class="dropdown head-dpdn">
						<a href="#help.html" class="dropdown-toggle"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div> 
		</div>
		<!-- header-three -->
	</div>
	<!-- //header -->
	<div class="wthree-offers">
		<div class="w3ls-add-grids w3agile-add-products">
		<?php
            if(isset($_SESSION["matricNumber"])){
              echo"<h4> <span>Welcome</span> " . $_SESSION["FullName"] . "</h4>";
              echo"<h5>Matric Number : " . $_SESSION["matricNumber"] . "</h5>";
              echo"<h5>Email Address : " . $_SESSION["emailAddress"] . "</h5>";
            }
        ?>
			</div> 
			<div class="offer-bottom">
			<div class="col-md-4 offer-bottom-grids">
					<div class="offer-bottom-grids-info">
					<h6 style="color:tomato; border-style:solid; border-color:wheat; border-width:2px; background:wheat; text-align:center; font-size:30px">Proceed to apply for your Transcript!</h6>
					</div>
				</div>
				<div class="col-md-4 offer-bottom-grids">
					<div class="offer-bottom-grids-info">
					<h4 style="color:tomato;">Note!!!</h4> 
						<h6 style="color:white">The first button below will lead you to a page where you print download your reciept while the second button will lead you to where you apply for your Transcript</h6>
						<div class="form-div" style="display: flex; justify-content:space-around; margin-bottom:10px;">
							<form action="print_receipt.php" method="POST">
								<button type="submit" class="paymentbutton" data-dismiss="modal" aria-hidden="true" style="width:100%;">Print Reciept</button>
							</form>
							<!-- <form action="application.php" method="POST"">
								<button type="submit" class="paymentbutton" data-dismiss="modal" aria-hidden="true" style="width:100%;">Apply for Transcript</button>
							</form> -->
						</div>
					</div>
				</div>
				<div class="col-md-4 offer-bottom-grids">
					<div class="offer-bottom-grids-info2">
						<!-- Fountain image section -->
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>	  
			
	<!-- footer starts here -->
	<?php include_once('include/footer.php'); ?>
	<!-- footer ends here -->