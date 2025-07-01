<?php

require("../Connection/connection.php");

$query = "CREATE TABLE tickets (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_name VARCHAR(250) NOT NULL,
  movie_name VARCHAR(250) NOT NULL,
  screening_time DATETIME NOT NULL,
  seat_number VARCHAR(10) NOT NULL,
  price DECIMAL(5,2) NOT NULL,
  FOREIGN KEY (user_name) REFERENCES users(name),
  FOREIGN KEY (movie_name) REFERENCES movies(name),
  FOREIGN KEY (screening_time) REFERENCES movies(screening_time)
)";

$execute = $mysqli->prepare($query);
$execute->execute();

?>
