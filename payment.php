<?php
	
	  session_start();
	  if(!isset($_SESSION["matricNumber"])){
		  header("location: login.php?error=loginrequest");
	  }

	  
	  $fullName = $_SESSION["FullName"];
      $matricNumber = $_SESSION["matricNumber"];
      $emailAddress = $_SESSION["emailAddress"];
	  $charges = "#300";
	  $transaction_fee = "#20,000";
	  $totalTransaction_fee = "#20,300";
	  $transcript_form_name = "Transcript Form Fee";
	  $transaction_name = "Transaction Fee";
	  $total_amount_name = "Total Amount";

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
            <div class="payment_page text-center" style="margin-bottom: 30px;">
                <h1>Payment Page</h1>
            </div>
		<div class="container">
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
                <td><?php echo"$transaction_fee"?></td>
                </tr>
                <tr>
                <th scope="row"><?php echo"$transaction_name"?></th>
                <td><?php echo"$charges"?></td>
                </tr>
                <tr>
                <th scope="row"><?php echo"$total_amount_name"?></th>
                <td><?php echo"$totalTransaction_fee"?></td>
                </tr>
            </tbody>
            </table>
			<form action="dashboard.php">
				<button type="submit" class="cornfirmbtn">Back</button>
			</form>
			<!-- JavaScript payStack -->
			<script src="https://js.paystack.co/v1/inline.js"></script>
			<button type="submit" class="cornfirmbtn" onclick="payWithPaystack()" data-dismiss="modal" aria-hidden="true">Procced to make a payment</button>
			<div class="clearfix" name = "payment"> </div>
		</div>
	</div>	  
	<script>
	function payWithPaystack(){
		var apiKey = "pk_test_80f51288bfdc286527271a1ff5060c8338af917f";
	  var handler = PaystackPop.setup({
		//   This is my own public test key, Do replace with your live public key and not secret key, lease note
		key: apiKey,
		email: '<?php echo $_SESSION["emailAddress"]?>',
		amount: 2000000,
		// ref: ''+Math.floor((Math.random() * 50000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
		metadata: {
		   custom_fields: [
			  {
				  display_name: '<?php echo $_SESSION["FullName"]?>',
				  variable_name: '<?php echo $_SESSION["matricNumber"]?>',
				  value: "",
			  }
		   ]
		},
		callback: function(response){
			// You can use this to redirect them to a page where they download receipt or something
			let message = response.reference;
			window.location.href = 'includes.inc/payment.inc.php?successfullypaid='+message;

		},
		onClose: function(){
			alert('Transaction was not completed, window closed.');
		}
	  });
	  handler.openIframe();
	}
  </script>
  <?php include_once('include/footer.php'); ?>
	<!-- footer ends here -->