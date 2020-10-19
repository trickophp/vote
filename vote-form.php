<?php

	if(isset($_POST['vote'])){
		$user = "root";
		$pass = "";
		$conn = new PDO("mysql:host=localhost;dbname=celswap;", $user, $pass);

		$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		$today = date("j, n, Y");
		$ip =  $_SERVER['REMOTE_ADDR'];
		
		$in = "INSERT INTO vote(ip, date) VALUES (?, ?)";
		$prep = $conn->prepare($in);
		$prep->execute([$ip, $today]);
		

		$sql = "SELECT user_id FROM vote ORDER BY user_id DESC";

		$stmt = $conn->prepare($sql);
    	$stmt->execute();
		$result = $stmt->fetch();
			echo $result['user_id'];
	}

?>