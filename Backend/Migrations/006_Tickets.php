<?php

require("../Connection/connection.php");

$query = "CREATE TABLE tickets (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_name VARCHAR(250) NOT NULL,
  movie_name VARCHAR(250) NOT NULL,
  screening_time DATETIME NOT NULL,
  seat_id INT NOT NULL,
  movie_price DECIMAL(5,2) NOT NULL,
  snacks_price DECIMAL(5,2) NOT NULL,
  
  FOREIGN KEY (seat_id) REFERENCES seats(id),
  FOREIGN KEY (user_name) REFERENCES users(name),
  FOREIGN KEY (movie_name) REFERENCES movies(name),
  FOREIGN KEY (movie_price) REFERENCES movies(price),
  FOREIGN KEY (snacks_price) REFERENCES snacks(price),
  FOREIGN KEY (screening_time) REFERENCES movies(screening_time)
)";

$execute = $mysqli->prepare($query);
$execute->execute();

?>
