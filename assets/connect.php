<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=hiking;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Connection failed ' . $e->getMessage());
}

?>