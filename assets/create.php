<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="/php-pdo/read.php">Liste des données</a>
	<h1>Add a hike</h1>
	<form action="" method="post">
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
			<label for="height_difference">Height Difference</label>
			<input type="text" name="height_difference" value="">
		</div>
		<button type="submit" name="button">Send</button>
	</form>
</body>
</html>