<?php 
include "dbconnection.php";
if(isset($_POST["country"])){
	
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	$name = validate($_POST["country"]);
	
	if(empty($name)){
		header("Location: update.php?error=name is required");
		exit();
	}else{
		$sql = "SELECT * FROM countries WHERE country='$name'";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			header("Location: update.php?error=country exists");
			exit();
		}else{
			$sql2 = "INSERT INTO countries(country) VALUES('$name')";
			if($conn->query($sql2) == TRUE){
				header("Location: index.php?success=country added");
				exit();
			}else{
				header("Location: index.php?error=unknown error");
				exit();
			}
		}
	}
}else{
	header("Location: update.php");
	exit();
}
?>