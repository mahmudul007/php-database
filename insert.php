<?php
include 'dbConnect.php';
function register($firstName,$lastName,$Dob,$Religion,$Gender,$Email,$presentAdress,$parmanentAdress,$username,$password){

	$conn = connect();
	$stmt=$conn->prepare("INSERT INTO USER (firstname,lastname,dob,relegion,gender,email,present_adress,parmanent_adress,username,password) VALUES (?,?)");
	$stmt -> bind_param("ssssssssss",$firstName,$lastName,$Dob,$Religion,$Gender,$Email,$presentAdress,$parmanentAdress, $Username,$Password);
	
    return $stmt->execute();
 }


?>