<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Form</title>
</head>
<body>
<h1>Registration Form</h1>



<?php
include 'insert.php';



$firstName=$lastName=$Dob=$Religion=$Gender=$Email=$presentAdress=$parmanentAdress=$Username=$Password=$Phone="";
$firstNameErr =$emailErr= $lastNameErr=$usernameErr=$passwordErr=$dobErr=$religionErr=$genderErr =$presentaddressErr=$parmanentaddressErr= "";
$isValid= true;
$successfulMessage = $errorMessage = "";



if($_SERVER['REQUEST_METHOD'] === "POST") {
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$Dob=$_POST['dob'];
$Religion=$_POST['relegion'];
isset($_POST['gender']);

$Email=$_POST['email'];
$presentAdress=$_POST['present_adress'];
$parmanentAdress=$_POST['parmanent_adress'];
$Username=$_POST['username'];
$Password=$_POST['password'];






if(empty($firstName)) {
$firstNameErr = "Field can not be empty";
$isValid= false;
}
if(empty($lastName)) {
$lastNameErr = "Field can not be empty";
$isValid= false;
}
if(empty($Email))
   {
    $emailErr="Value cant be empty";
   $isValid= false;
   }


if(empty($Gender))
     {
        $genderErr="Value cant be empty";
      $isValid= false;
if(empty($Dob))
     {
        $dobErr="Value can't be empty";
    $isValid= false;
     }
if(empty($Religion))
     {
        $religionErr="Value cant be empty";
      $isValid= false;}
      if(empty($Username))
   {
    $usernameErr="Value cant be empty";
   $isValid= false;
   }
  
if (empty($Password))
   {
    $passwordErr="Value cant be empty";
$isValid= false;
   }
   if (empty($present_adress))
   {
    $presentaddressErr="value not empt";
    $isValid= false;

   }
   if (empty($parmanent_adress)){
    $presentaddressErr="error";
        $isValid= false;
   }





 if ($isValid) {
         $res=register($firstName,$lastName,$Dob,$Religion,$Gender,$Email,$presentAdress,$parmanentAdress, $Username,$Password,$Phone);

         if($res) {
         
          $successfulMessage = "Sucessfully saved";
        
          }
          else {
         $errorMessage = "saving error";
         }
       }
}
}



function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}




?>

  

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="file-io" onsubmit="return isValid();">
    <fieldset>
  <legend>Basic Information:</legend>
  
<label for="firstname">First Name<span style="color: red">*</span>: </label>
<input type="text" name="firstname" id="firstname">
<span style="color: red"><?php echo $firstNameErr; ?></span>
<br><br>
<label for="lastname">Last Name<span style="color: red">*</span>: </label>
<input type="text" name="lastname" id="lastname">
<span style="color: red"><?php echo $lastNameErr; ?></span>
<br><br>

<label for="gender">Gender:<span style="color: red">*:</span></label>
          <label for="male">Male</label> 
        <input type="radio" id="gender" name="gender" value="male">
         <label for="female">Female</label>
        <input type="radio" id="gender" name="gender" value="female">
      <label for="other">Other</label> 
        <input type="radio" id="gender" name="gender" value="other">
        
        <span style="color: red"><?php echo $genderErr; ?></span><br><br>

 <label for="dob">DoB<span style="color: red">*</span></label>
        <input type="date" name="dob" id="dob">
        <span style="color: red"><?php echo $dobErr; ?></span><br><br>


        <label for="relegion">Relegion<span style="color: red">*</span>:</label>
   <select id = "relegion" name="relegion">
    <option value="Islam"> Islam </option> 
        <option value="Hindu"> Hindu </option>
            <option value="Buddha"> Buddha </option>
                <option value="Other"> Other </option>   
            </select>


</fieldset>



        <fieldset>
   <legend>Contact Information:</legend> 
   <label for="present_adress">Present adress<span style="color: red">*</span>: </label> 
    <input type="text" id="present_adress" name="present_adress"><br><br>
     <label for="parmanent_adress">Present adress<span style="color: red">*</span>: </label> 
      <input type="text" id="parmanent_adress" name="parmanent_adress"><br><br>
      <label for ="phone"> Phone</label>
      <input type="tel" id="phone" name="phone" ><br><br>
      <label for="email">Email<span style="color: red">*</span>:</label>
        <input type="email" id="email" name="email">
        <span style="color: red"><?php echo $emailErr; ?></span><br><br>
        <label for ="url">Personal Website link :</label>
        <p><a href="https://www.facebook.com/">Visit my web page</a></p>
    </fieldset>

 <fieldset>
     <legend>Account information</legend>
     <label for="username">User name<span style="color: red">*</span>:</label>
     <input type="text" id="username" name="username"><br><br>
     <label for="password">Password<span style="color: red">*</span>:</label>
     <input type="password" id="password"  name="password"><br><br>
 </fieldset>
<input type="submit" name="submit" value="Register">
</form>



<br>



<span style="color: green"><?php echo $successfulMessage; ?></span>
<span style="color: red"><?php echo $errorMessage; ?></span>

<a href="login.php">Go to Login</a>



<script>
	function validation(){
  var firstName=document.getElementById('firstName').value;
  var lastName=document.getElementById('lastname').value;
  var dob=document.getElementById('dob').value;
  var relegion=document.getElementById('relegion').value;
  var gender=document.getElementById('gender').value;
  var email=document.getElementById('email').value;
  var presentAddress=document.getElementById('present_adress').value;
  var parmanentAddress=document.getElementById('parmanent_adress').value;


  var username=document.getElementById('username').value;
  var password=document.getElementById('password').value;
  var phone=document.getElementById('phone').value;

  if(firstName == ""){
 	document.getElementById("messages").innerHTML ="** please fill the blank";
 	return false;

 } 
  if(lastName == ""){
 	document.getElementById("messages").innerHTML ="** please fill the blank";
 	return false;

 } 
  if(dob == ""){
 	document.getElementById("messages").innerHTML ="** please fill the blank";
 	return false;

 } 
  if(relegion == ""){
 	document.getElementById("messages").innerHTML ="** please fill the blank";
 	return false;

 } 
  if(gender == ""){
 	document.getElementById("messages").innerHTML ="** please fill the blank";
 	return false;

 } 
  if(email == ""){
 	document.getElementById("messages").innerHTML ="** please fill the blank";
 	return false;

 } 
  if(presentAddress == ""){
 	document.getElementById("messages").innerHTML ="** please fill the blank";
 	return false;

 } 
  if(parmanentAddress == ""){
 	document.getElementById("messages").innerHTML ="** please fill the blank";
 	return false;

 } 
  if(phone == ""){
 	document.getElementById("messages").innerHTML ="** please fill the blank";
 	return false;

 } 
 else if(username == ""){
 	document.getElementById("messages2").innerHTML ="** please fill the  username";
 	return false;

 }  
 else if(password == ""){
 	document.getElementById("messages3").innerHTML ="** please fill the   password";
 	return false;

 }  
 
  
} 

 
 
</script>


</body>
</html>