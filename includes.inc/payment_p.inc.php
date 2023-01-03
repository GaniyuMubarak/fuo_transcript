<?php 
        require_once "dbh.inc.php";
        session_start();
        if(!$_GET["successfullypaid"]){
          header("location: ../dashboard.php?error=notbeingchecked");
        }else{
         $reference = $_GET["successfullypaid"];
        }
// Declearation of variables
        $matricNumber = $_SESSION["matricNumber"];
        $paidAmount = '10000';
        $expectedToPaid = '10000';
        $transcript_form = "Transcript Form";
        $paystack_return = 1;
      
      $sql = "INSERT INTO payment_details (matric_no, paid_amount, expected_amount, reference_no, transcript_form, paystack_return) VALUES(?, ?, ?, ?, ?, ?);";
      $stmt = mysqli_stmt_init($connection);
      if(!mysqli_stmt_prepare($stmt, $sql)){
       header("location: ../payment.php?error=stmtfailed");
       exit();
      }
   
      mysqli_stmt_bind_param($stmt, "sssssi", $matricNumber, $paidAmount, $expectedToPaid, $reference, $transcript_form, $paystack_return);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      header("location: ../return.php?success=successfullypaid");
       exit();
       mysqli_stmt_close($stmt);
  
       ?>

       