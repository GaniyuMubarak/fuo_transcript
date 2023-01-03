<?php

if(isset($_POST["Registrationbtn"])){

    // Declearation of variables

$type = $_POST["type"];
$fullName = $_POST["fullName"];
$matricNumber = $_POST["matricNumber"];
$phoneNumber = $_POST["phoneNumber"];
$emailAddress = $_POST["emailAddress"];
$HLS = $_POST["hls"];


// including of data base and function using require_once

require_once "dbh.inc.php";
require_once "function.inc.php";

// Query an empty Input field

if(uidExist($connection, $emailAddress, $matricNumber) !== false){
    header("location: ../registration.php?error=userhasbeentaken");
    exit();
}

createUser($connection, $type, $fullName, $matricNumber, $phoneNumber, $emailAddress, $HLS);


}else{
    header("location: ../registration.php?error=notbeingchecked");
    exit();
}