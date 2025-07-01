<?php

require("../Connection/connection.php");

$query = "CREATE TABLE payments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_name INT NOT NULL,
  ticket_id INT NOT NULL,
  amount DECIMAL(6,2) NOT NULL,
  payment_method VARCHAR(50),
  FOREIGN KEY (user_name) REFERENCES users(name),
  FOREIGN KEY (ticket_id) REFERENCES tickets(id)
)";

$execute = $mysqli->prepare($query);
$execute->execute();

?>
