<?php

require("../Connection/connection.php");

$query = "CREATE TABLE IF NOT EXISTS admins (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
)";

$execute = $mysqli->prepare($query);
$execute->execute();

?>
