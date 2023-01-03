<?php 
session_start();
if(!isset($_SESSION["matricNumber"])){
    header("location: login.php?error=loginrequest");
}else{
    $to = '<?php if(isset($_SESSION["matricNumber"])){ echo $_SESSION["emailAddress"]; }?>';
    $subject = 'Reset your passwrod for compcodetech';
    $message = '<p>We received a password reset request. The link to reset the password is below, if you did not make    this request, you can ignore this email</p>';
    $message.= '<p>Here is your password reset link: <br/>';
    $message.= '<a href="#"></a></p>';

    $header = "From Fountain University, Osogbo\r\n";
    $header .= "Reply-To: ganiyumubarak12@gmail.com\r\n";
    $header .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $header); 
}


   
