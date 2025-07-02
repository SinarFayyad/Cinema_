<?php

require("../Connection/connection.php");

$query = "CREATE TABLE seats (
  id INT AUTO_INCREMENT PRIMARY KEY,
  seat_number VARCHAR(10) NOT NULL,
  `row_number` VARCHAR(5),
  is_available BOOLEAN,
  movie_name VARCHAR(100) NOT NULL,
  FOREIGN KEY (movie_name) REFERENCES movies(name)
)";

$execute = $mysqli->prepare($query);
$execute->execute();
?>
