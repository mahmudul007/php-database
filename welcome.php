<?php  
 session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>registrstion page</title>
</head>
<body>


<h1> welcome ,<?php   

if (isset( $_SESSION['username'])){

echo $_SESSION['username'];
}
else{
	
	header("Location:logout.php");
}?>
	
</h1>
</body>
</html>