<?php
function connect(){
        $conn = new mysqli("localhost","sayed","123","wtm");
        if ($conn->connect_errno) {
	   die( " connection failed due to" . $conn->connect_error);
}
return $conn;
}

?>
