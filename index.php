<?php include "database.php"; 
$query = "SELECT * FROM shouts ORDER BY id DESC";
$shouts = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>JSS Shoutbox</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="container">
		<header>
			<h1>JS Shoutbox</h1>
		</header>
		<div id="shouts">
			<ul>
			<?php while($row = mysqli_fetch_assoc($shouts)){ ?>
				<li><?php echo $row['name'];?><?php echo $row['shout']; ?><?php echo '['.$row['date'].']'; ?></li>
			<?php } ?>
			</ul>
		</div>
		<footer>
			<label>Name:</label>
			<input type="text" name="" id="name">
			<label>Shout Text</label>
			<input type="text" id="shout">
			<input type="submit" id="submit" value="SHOUT!">
		</footer>

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/script.js"></script>

</body>
</html>