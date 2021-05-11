<?php 
$conn = mysqli_connect("localhost","root","","shoutbox_db");
if(mysqli_connect_errno()>0){
	echo "can't connect ".$mysqli_connect_error();	
}
?>