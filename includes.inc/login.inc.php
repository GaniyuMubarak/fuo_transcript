<?php 

if(isset($_POST["Loginbtn"])){

// Declearation of variables
    $emailAddress = $_POST["emailAddress"];
    $matricNumber = $_POST["matricNumber"];

    // including of data base and function using require_once

    require_once "dbh.inc.php";
    require_once "function.inc.php";

//  

    if(userExist($connection, $emailAddress, $matricNumber) === false){
        header("location: ../login.php?error=wronginput");
        exit();
    }

    // if(paymentExist($connection, $matricNumber) === false){
    //     header("location: ../dashboard.php?success=loginsuccessful");
    //     exit();
    // }
    // Query an empty Input field
    loginUser($connection, $emailAddress, $matricNumber);

  
 }else{
    header("location: ../login.php?error=notbeingchecked");
    exit();
 }

//     
 
