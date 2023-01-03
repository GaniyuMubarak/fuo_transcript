<?php
$ServerName = "localhost";
$UserName = "root";
$PasswordName = "";
$DBName = "fuo_transcript";

$connection = mysqli_connect($ServerName, $UserName, $PasswordName, $DBName);
if(!$connection){
    die("Connection Failed " . mysqli_connect_error());
}
