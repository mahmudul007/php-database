<?php
include 'connection.php';
 function register($firstName,$lastName,$Dob,$Religion,$Gender,$Email,$presentAdress,$parmanentAdress, $Username,$Password,$Phone){

	$conn = connect();
	$stmt=$conn->prepare("INSERT INTO USERS (firstname,lastname,dob,relegion,gender,email,present_adress,parmanent_adress,username,password,phone) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
	$stmt -> bind_param("sssssssssss",$firstName,$lastName,$Dob,$Religion,$Gender,$Email,$presentAdress,$parmanentAdress, $Username,$Password,$Phone);
	
     return $stmt->execute();
 }
?>