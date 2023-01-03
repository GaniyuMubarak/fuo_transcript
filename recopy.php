<?php
	$transcript_form_fee = "#10,000";
	$transaction_fee = "#300";
	$total_amount = "#10,300";
	$transcript_form_name = "Transcript Form Fee";
	$transaction_name = "Transaction Fee";
	$total_amount_name = "Total Amount";
	  session_start();
	  if(!isset($_SESSION["emailAddress"])){
		  header("location: login.php?error=loginrequest");
	  }else{
		  $_SESSION["FullName"];
          $_SESSION["matricNumber"];
          $_SESSION["emailAddress"];
          $_SESSION["transcript_form_name"] = $transcript_form_name; 
          $_SESSION["transcript_form_fee"] =  $transcript_form_fee;
	  }

?>
<!-- head starts here -->
<?php include_once('include/head.php'); ?>
<style>
.cornfirmbtn{
    background: #0c5805;
    border: none;
    padding: .8em 2em;
    color: #fff;
    font-size: 1.4em;
    outline: none;
    width:60%;
    margin:30px 0px 0px 20%; 
}

.table{
    height: 400px;
    width: 100%;
    margin:auto;
    font-size:20px;
    background: rgba(210, 210, 210, 0.3);
}

</style>
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
						<a href="help.html" class="dropdown-toggle"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div> 
		</div>
		<!-- header-three -->
	</div>
	<!-- //header -->
	<div class="wthree-offers">
		<div class="container">
            <div class="payment_page text-center">
                <h2>Payment Page</h2>
                <h4>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis natus ducimus doloribus.</h4>
            </div>
		<table class="table">
            <thead>
                <tr>
                <th scope="col">Payment</th>
                <th scope="col">Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row"><?php echo"$transcript_form_name"?></th>
                <td><?php echo"$transcript_form_fee"?></td>
                </tr>
                <tr>
                <th scope="row"><?php echo"$transaction_name"?></th>
                <td><?php echo"$transaction_fee"?></td>
                </tr>
                <tr>
                <th scope="row"><?php echo"$total_amount_name"?></th>
                <td><?php echo"$total_amount"?></td>
                </tr>
            </tbody>
            </table>
			<form action="dashboard.php">
				<button type="submit" class="cornfirmbtn">Back</button>
			</form>
			<!-- JavaScript payStack -->
			<!-- <script src="https://js.paystack.co/v1/inline.js"></script>
			<button type="submit" class="cornfirmbtn" onclick="payWithPaystack()" data-dismiss="modal" aria-hidden="true">Procced to make a payment</button> -->
			<form>
				<script src="https://js.paystack.co/v1/inline.js"></script>
				<button type="button" onclick="payWithPaystack()"> Pay </button> 
	  		</form>
			<div class="clearfix"> </div>
		</div>
	</div>	  
	<script>
	function payWithPaystack(){
	  var handler = PaystackPop.setup({
		//   This is my own public test key, Do replace with your live public key and not secret key, lease note
		key: 'pk_test_19b32f36051bd4c580e6663a7b0973b3cacae0d9',
		email: 'theadeptprofessional@gmail.com',
		amount: 10000000,
		ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
		metadata: {
		   custom_fields: [
			  {
				  display_name: "The Adept Professionals",
				  variable_name: "08163190595",
				  value: "+2348163190595"
			  }
		   ]
		},
		callback: function(response){
			// You can use this to redirect them to a page where they download receipt or something
			window.location = "https://www.theadeptprofessionals.com?reference=" + response.reference;
		},
		onClose: function(){
			alert('window closed');
		}
	  });
	  handler.openIframe();
	}
  </script>	
	<!-- footer starts here -->
	<!-- <script>
	function payWithPaystack(){
	  var handler = PaystackPop.setup({
		//   This is my own public test key, Do replace with your live public key and not secret key, lease note
		key: 'pk_test_80f51288bfdc286527271a1ff5060c8338af917f',
		email: "ganiyumubarak12@gmail.com",
		amount: 500000,
		// ref: ''+Math.floor((Math.random() * 50000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
		metadata: {
		   custom_fields: [
			  {
				  display_name: 'Ganiyu Mubarak A',
				  variable_name: "08163190595",
				  value: "+2348163190595"
			  }
		   ]
		},
		callback: function(response){
			// You can use this to redirect them to a page where they download receipt or something
			window.location = "payment.php?";
		},
		onClose: function(){
			alert('window closed');
		}
	  });
	  handler.openIframe();
	}
  </script> -->
  <?php include_once('include/footer.php'); ?>
	<!-- footer ends here -->