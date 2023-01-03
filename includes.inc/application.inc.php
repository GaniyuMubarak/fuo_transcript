<?php

if(isset($_POST["applicationBtn"])){

    // Declearation of variables

    $transcript_type = $_POST["transcript_type"];
    $fullName = $_POST["fullName"];
    $date_of_birth = $_POST["DOB"];
    $gender = $_POST["gender"];
    $nationality = $_POST["nationality"];
    $matricNumber = $_POST["matricNumber"];
    $phoneNumber = $_POST["phoneNumber"];
    $emailAddress = $_POST["emailAddress"];
    $colleges = $_POST["college"];
    $departments = $_POST["department"];
    $modeOfAdmission = $_POST["modeOfAdmission"];
    $programmes = $_POST["programmes"];
    $yearOfAdmission = $_POST["yearOfAdmission"];
    $yearOfGraduation = $_POST["yearOfGraduation"];
    $yearOfAward = $_POST["yearOfAward"];
    $degreeAward = $_POST["degreeAward"];
    $purposeOfTranscript = $_POST["purposeOfTranscript"];
    $addressTo = $_POST["addressTo"];


// including of data base and function using require_once

require_once "dbh.inc.php";
require_once "function.inc.php";

appplyUser($connection, $transcript_type, $fullName, $date_of_birth, $gender, $nationality, $matricNumber, $phoneNumber, $emailAddress, $colleges, $departments, $modeOfAdmission, $programmes, $yearOfAdmission, $yearOfGraduation, $yearOfAward, $degreeAward, $purposeOfTranscript, $addressTo);

}else{
    header("location: ../dashboard.php?error=notfound");
    exit();
 }
