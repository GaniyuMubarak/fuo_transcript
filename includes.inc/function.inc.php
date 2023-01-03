<?php
session_start();
$result;
// check if user exist before register
function uidExist($connection, $emailAddress, $matricNumber){
    
   $sql = "SELECT * FROM transcript_regdetails WHERE EmailAddress = ? OR MatricNumber = ?;";
   $stmt = mysqli_stmt_init($connection);
   if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../registration.php?error=stmtfailed");
    exit();
   }

   mysqli_stmt_bind_param($stmt, "ss", $emailAddress, $matricNumber);

   mysqli_stmt_execute($stmt);

   $resultGet = mysqli_stmt_get_result($stmt);

   if($row = mysqli_fetch_assoc($resultGet)){
        return $row;
   }else{
       $result = false;
       return $result;
   }

   mysqli_stmt_close($stmt);
}

// check if user exist before login
function userExist($connection, $emailAddress, $matricNumber){
    
    $sql = "SELECT * FROM transcript_regdetails WHERE EmailAddress = ? AND MatricNumber = ?;";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $sql)){
     header("location: ../login.php?error=stmtfailed");
     exit();
    }
 
    mysqli_stmt_bind_param($stmt, "ss", $emailAddress, $matricNumber);
 
    mysqli_stmt_execute($stmt);
 
    $resultGet = mysqli_stmt_get_result($stmt);
 
    if($row = mysqli_fetch_assoc($resultGet)){
         return $row;
    }else{
        $result = false;
        return $result;
    }
 
    mysqli_stmt_close($stmt);
 }


// check if payment exist before login
function paymentExist($connection, $matricNumber){
    
   $sql = "SELECT * FROM payment_details WHERE matric_no = ?;";
   $stmt = mysqli_stmt_init($connection);
   if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../login.php?error=stmtfailed");
    exit();
   }

   mysqli_stmt_bind_param($stmt, "s", $matricNumber);

   mysqli_stmt_execute($stmt);

   $resultGet = mysqli_stmt_get_result($stmt);

   if($row = mysqli_fetch_assoc($resultGet)){
        return $row;
   }else{
       $result = false;
       return $result;
   }

   mysqli_stmt_close($stmt);
}

// check if user exist before apply
 function applyExist($connection, $emailAddress, $matricNumber){
    
    $sql = "SELECT * FROM transcript_appdetails WHERE EmailAddress = ? AND MatricNumber = ?;";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $sql)){
     header("location: ../dashboard.php?error=stmtfailed");
     exit();
    }
 
    mysqli_stmt_bind_param($stmt, "ss", $emailAddress, $matricNumber);
 
    mysqli_stmt_execute($stmt);
 
    $resultGet = mysqli_stmt_get_result($stmt);
 
    if($row = mysqli_fetch_assoc($resultGet)){
         return $row;
    }else{
        $result = false;
        return $result;
    }
 
    mysqli_stmt_close($stmt);
 }

// insert into registration page
function createUser($connection, $type, $fullName, $matricNumber, $phoneNumber, $emailAddress, $HLS){
    
   $sql = "INSERT INTO transcript_regdetails (Type, FullName, MatricNumber, PhoneNumber, EmailAddress, Highest_Level_Edu) VALUES(?, ?, ?, ?, ?, ?);";
   $stmt = mysqli_stmt_init($connection);
   if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../registration.php?error=stmtfailed");
    exit();
   }

   mysqli_stmt_bind_param($stmt, "ssssss", $type, $fullName, $matricNumber, $phoneNumber, $emailAddress, $HLS);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header("location: ../registration.php?error=none");
    exit();
}


// login user code
function loginUser($connection, $emailAddress, $matricNumber){
    $applyExist = applyExist($connection, $emailAddress, $matricNumber);
    $userExist = userExist($connection, $emailAddress, $matricNumber);
    $paymentExists = paymentExist($connection, $matricNumber);
    if($applyExist !== false){
        $_SESSION["emailAddress"] = $userExist["EmailAddress"];
        $_SESSION["matricNumber"] = $userExist["MatricNumber"];
        $_SESSION["FullName"] = $userExist["FullName"];
        $_SESSION["type"] = $userExist["Type"];
        $_SESSION["phoneNumber"] = $userExist["PhoneNumber"];
        $_SESSION["HLS"] = $userExist["Highest_Level_Edu"];
        $_SESSION["refNo"] = $paymentExists["reference_no"];
        $_SESSION["applyDate"] = $paymentExists["date"];
        $_SESSION["paidAmount"] = $paymentExists["paid_amount"];
        header("location: ../congrat.php?success=welcome");
    }elseif($paymentExists !== false){
        $_SESSION["emailAddress"] = $userExist["EmailAddress"];
        $_SESSION["matricNumber"] = $userExist["MatricNumber"];
        $_SESSION["FullName"] = $userExist["FullName"];
        $_SESSION["type"] = $userExist["Type"];
        $_SESSION["phoneNumber"] = $userExist["PhoneNumber"];
        $_SESSION["HLS"] = $userExist["Highest_Level_Edu"];
        $_SESSION["refNo"] = $paymentExists["reference_no"];
        $_SESSION["applyDate"] = $paymentExists["date"];
        $_SESSION["paidAmount"] = $paymentExists["paid_amount"];
         header("location: ../return.php?success=welcome"); 
    }elseif($paymentExists === false){
        $_SESSION["emailAddress"] = $userExist["EmailAddress"];
        $_SESSION["matricNumber"] = $userExist["MatricNumber"];
        $_SESSION["FullName"] = $userExist["FullName"];
        $_SESSION["type"] = $userExist["Type"];
        $_SESSION["phoneNumber"] = $userExist["PhoneNumber"];
        $_SESSION["HLS"] = $userExist["Highest_Level_Edu"];
        $_SESSION["refNo"] = $paymentExists["reference_no"];
        $_SESSION["applyDate"] = $paymentExists["date"];
        $_SESSION["paidAmount"] = $paymentExists["paid_amount"];
         header("location: ../dashboard.php?success=loginsuccessful");
          exit();
    }
}


// Applicaiton funciton
function appplyUser($connection, $transcript_type, $fullName, $date_of_birth, $gender, $nationality, $matricNumber, $phoneNumber, $emailAddress, $colleges, $departments, $modeOfAdmission, $programmes, $yearOfAdmission, $yearOfGraduation, $yearOfAward, $degreeAward, $purposeOfTranscript, $addressTo){

    $paymentExist = paymentExist($connection, $matricNumber);

    if($paymentExist === false){
        header("location: ../dashboard.php?error=userhasnotpaid");
    exit();
    }else{
        $sql = "INSERT INTO transcript_appdetails (Type, FullName, DateOfBirth, Gender, Nationality, MatricNumber, PhoneNumber, EmailAddress, College, Department, ModeOfAdmission, Programmes, YearOfAdmission, YearOfGraduation, YearofAward, DegreeAward, PurposeOfTranscript, AddressTo) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $sql)){
         header("location: ../dashboard.php?error=stmtfailed");
         exit();
        }
     
        mysqli_stmt_bind_param($stmt, "ssssssssssssssssss", $transcript_type, $fullName, $date_of_birth, $gender, $nationality, $matricNumber, $phoneNumber, $emailAddress, $colleges, $departments, $modeOfAdmission, $programmes, $yearOfAdmission, $yearOfGraduation, $yearOfAward, $degreeAward, $purposeOfTranscript, $addressTo);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../emailMessage.php?error=none");
         exit();
    }
 }