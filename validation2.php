<?php

$conn=mysqli_connect("localhost","root","","PETS");
if($conn)
{
	echo "Your pet details data got successfully saved in database";
}
else
{
	echo "fail";
}
//$query="CREATE DATABASE `PETS`";
//$query="CREATE TABLE `PET_DETAILS` (`NAME` VARCHAR(20),`Age` VARCHAR(30),`Mobile` VARCHAR(20),`Email` VARCHAR(20),`Password` VARCHAR(20),`Country` VARCHAR(20),`State` VARCHAR(20),`Pet_Name` VARCHAR(20),`Pet_price` VARCHAR(20),`Pet_type` VARCHAR(20),)";
//mysqli_query($conn,$query);
$name = $_POST['name'];
$age = $_POST['age'];
$mobile = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$country = $_POST['country'];
$state = $_POST['state'];
$petname = $_POST['pet'];
$petprice = $_POST['price'];
$pettype = $_POST['pet1'];
$query="INSERT INTO `PET_DETAILS` (`NAME` ,`Age` ,`Mobile` ,`Email` ,`Password` ,`Country` ,`State` ,`Pet_Name` ,`Pet_Price` ,`Pet_Type` ) VALUES (?,?,?,?,?,?,?,?,?,?)";
$stmt=mysqli_prepare($conn,$query);
mysqli_stmt_bind_param($stmt,'ssssssssss',$name,$age,$mobile,$email,$password,$country,$state,$petname,$petprice,$pettype);
mysqli_stmt_execute($stmt);


?>