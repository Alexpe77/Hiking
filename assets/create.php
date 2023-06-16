<?php

require 'connect.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
	$name = $_POST['name'];
	$difficulty = $_POST['difficulty'];
	$distance = $_POST['distance'];
	$duration = $_POST['duration'];
	$height = $_POST['height_difference'];

	if (
		
		is_string($name) &&
		is_string($difficulty)&&
		is_numeric($distance) &&
		is_string($duration) &&
		is_numeric($height)
		
	) {
		$sql = "INSERT INTO hiking (name, difficulty, distance, duration, height_difference) VALUES (?,?,?,?,?)";
		$stmt = $bdd->prepare($sql);
		$stmt->execute([$name, $difficulty, $distance, $duration, $height]);

		echo "The hiking was added successfully.";
	} else {
		echo "Please add valid informations.";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Let's hike!</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="/php-pdo/read.php">Liste des données</a>
	<h1>Add a hike</h1>
	<form action="create.php" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
		</div>

		<div>
			<label for="difficulty">Difficulty</label>
			<select name="difficulty">
				<option value="very easy">Very easy</option>
				<option value="easy">Easy</option>
				<option value="middle">Middle</option>
				<option value="hard">Hard</option>
				<option value="very hard">Very Hard</option>
			</select>
		</div>

		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="">
		</div>
		<div>
			<label for="duration">Duration</label>
			<input type="time" name="duration" value="">
		</div>
		<div>
			<label for="height_difference">Height Difference +</label>
			<input type="text" name="height_difference" value="">
		</div>
		<button type="submit" name="button">Add</button>
	</form>
</body>
</html>