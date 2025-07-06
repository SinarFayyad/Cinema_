<?php
require("../Connection/connection.php");

$query = "CREATE TABLE movies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    genre VARCHAR(100),
    release_year YEAR,
    screening_date DATETIME,
    price DECIMAL(5,2) NOT NULL,
    location VARCHAR(100),
    poster_url TEXT,
    cast TEXT,
    rating DECIMAL(2,1),
    trailer_url TEXT
)";

$execute = $mysqli->prepare($query);
$execute->execute();

?>