<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&family=Quicksand&display=swap" rel="stylesheet">
    <title>Find your next Hike !</title>
</head>

<body>
    <header class="bg-gray-200 py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-2xl font-bold text-gray-800">Hike List</h1>
            <div class="flex items-center space-x-4">
                <a href="index.php" class="text-2xl font-bold text-gray-800 border border-gray-800 rounded-md px-4 py-2
transition-colors duration-300 hover:bg-gray-800 hover:text-white">Home</a>
                <a href="create.php" class="text-2xl font-bold text-gray-800 border border-gray-800 rounded-md px-4 py-2
transition-colors duration-300 hover:bg-gray-800 hover:text-white">Add a new hike</a>
            </div>
        </div>
    </header>

    <main>
        <?php

        try {

            require 'connect.php';
            $query = 'SELECT * FROM hiking';
            $stmt = $bdd->query($query);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $row) {
                echo '<div class="displayed_hikes">';
                echo '<ul>';
                echo '<li>Name : ' . $row['name'] . '</li>';
                echo '<li>Difficulty : ' . $row['difficulty'] . '</li>';
                echo '<li>Distance : ' . $row['distance'] . 'm' . '</li>';
                echo '<li>Duration : ' . $row['duration'] . '</li>';
                echo '<li>Height Difference : + ' . $row['height_difference'] . 'm' . '</li>';
                echo '</ul>';
                echo '</div>';
            }
        } catch (PDOException $e) {
            echo "Connection failed to database" . $e->getMessage();
        }

        $bdd = null;

        ?>
    </main>

</body>

</html>