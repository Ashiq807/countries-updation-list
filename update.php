<!DOCTYPE html>
<html>
<head>
	<style>
		.error{
			color: red;
		}
		#save{
			padding: 10px;
			background-color: #0275d8;
			display: inline-block;
			color: white;
			border: none;
			text-decoration: none;
			cursor: pointer;
		}
		#back{
				padding: 9px;
				background-color: #0275d8;
				display: inline-block;
				color: white;
				text-decoration: none;
			}
	</style>
</head>
<body>
	<h2>add</h2>
	
	<?php if(isset($_GET["error"])){ ?>
		<p class="error"><?php echo $_GET["error"] ?></p>
	<?php } ?>
	
	<form action="update_action.php" method="post">
		<input type="text" name="country" placeholder="enter name"><br><br>
		<button type="submit" id="save">save</button>
		<a href="index.php" id="back">back</a>
	</form>
	
</body>
</html>