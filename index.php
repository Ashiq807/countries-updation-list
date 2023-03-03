<!DOCTYPE html>
<html>
	<head>
		<style>
			*{
				box-sizing: border-box;
				margin: 0;
				paddin: 0;
			}
			body{
				padding: 10px;
			}
			.error{
				colo: red;
			}
			.success{
				color: green;
			}
			#add{
				padding: 10px;
				background-color: #0275d8;
				display: inline-block;
				color: white;
				float: right;
				text-decoration: none;
			}
			table,tr,td{
				border: 1px solid black;
				border-collapse: collapse;
			}
			td{
				padding: 10px;
			}
		</style>
	</head>
	<body>
		<?php if(isset($_GET["error"])){ ?>
			<p class="error"><?php echo $_GET["error"] ?></p>
		<?php } ?>
		
		<?php if(isset($_GET["success"])){ ?>
			<p class="success"><?php echo $_GET["success"] ?></p>
		<?php } ?>
		
		<a href="update.php" id="add">add new</a><br>
		
		<?php 
			include "dbconnection.php";
			
			$sql = "SELECT * FROM countries";
			$result = $conn->query($sql);
			
			echo "<table>";
			while($row = $result->fetch_assoc()){
				echo "<tr><td>".$row["country"]."</td></tr>";
			}
			echo "</table>";
		?>
		
	</body>
</html>