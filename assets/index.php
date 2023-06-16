<?php include 'header.php'; ?>

<body>
    <header class="bg-gray-200 py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-3xl font-bold text-gray-800">Hike List</h1>
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