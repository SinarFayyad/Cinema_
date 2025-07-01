<?php

require("../Connection/connection.php");

$query = "CREATE TABLE IF NOT EXISTS reservations (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_name VARCHAR(250) NOT NULL,
  movie_name VARCHAR(250) NOT NULL,
  seat_id INT NOT NULL,
  FOREIGN KEY (user_name) REFERENCES users(name),
  FOREIGN KEY (movie_name) REFERENCES movies(name),
  FOREIGN KEY (seat_id) REFERENCES seats(id)
)";


$execute = $mysqli->prepare($query);
$execute->execute();

?>
