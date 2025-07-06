<?php

require("../Connection/connection.php");

$query = "CREATE TABLE tickets (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_name VARCHAR(100) NOT NULL,
  movie_name VARCHAR(100) NOT NULL,
  screening_time DATETIME NOT NULL,
  seat_row_number INT NOT NULL,
  seat_column_number INT NOT NULL,
  movie_price DECIMAL(5,2) NOT NULL,
  snacks_name DECIMAL(5,2) NOT NULL,

  FOREIGN KEY (user_name) REFERENCES users(name),
  FOREIGN KEY (snacks_name) REFERENCES snacks(name),
  FOREIGN KEY (seat_row_number, seat_column_number) REFERENCES seats(`row_number`, column_number),
  FOREIGN KEY (movie_name, movie_price, screening_time) REFERENCES movies(name, price, screening_time)

)";

$execute = $mysqli->prepare($query);
$execute->execute();

?>
