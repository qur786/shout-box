<?php 
	include "db_connect/dbconnect.php";
?>

<?php 

	if(isset($_POST["name"]) && isset($_POST["shout"])){
		$name = mysqli_real_escape_string($conn,$_POST["name"]);
		$shout = mysqli_real_escape_string($conn,$_POST["shout"]);
		$date = mysqli_real_escape_string($conn,$_POST["date"]);
		date_default_timezone_set("Asia/Kolkata");	
		$date = date('h:m:s a',time());
		$query = "insert into shoutbox_table(name,shouts,date) values('$name','$shout','$date')";
		if(!mysqli_query($conn,$query)){
			echo "error :".mysqli_error();
		}
		else{
			echo "<li>".$name." : ".$shout." [ ".$date." ] </li>";
		}
	
	}
			
?>
