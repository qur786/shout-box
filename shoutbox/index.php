<?php include "db_connect/dbconnect.php" ?>
<?php $query = "SELECT * FROM shoutbox_table ORDER BY userid DESC";
	  $result = mysqli_query($conn,$query);
	  
 ?>
<!doctype html>
<html>
	<head>
		<link href="css/style.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="js/shout.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="container">
			<header> shout box</header>
				<div id="shoutbox">
					<ul>
					<?php while($row = mysqli_fetch_assoc($result)):; ?>
						<li><?php echo $row["name"] ?> : <?php echo $row["shouts"]; ?> [ <?php echo $row["date"]; ?> ]</li>
						<?php  endwhile; ?>
						<li></li>
					</ul>
				</div>
				<footer>
					<label for="name">name</label>
					<input type="text" name="name" id="name">
					<label  for="shout">shouts</label>
					<input type="text" name="shout" id="shout">
					<input type="submit" name="submit" id="submit" value="SHOUT!">
				</footer>
		</div>
	</body>
</html>