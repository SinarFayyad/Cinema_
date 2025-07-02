<?php

require("../Connection/connection.php");
$email = $_POST['email']?? '';
$password = $_POST['password']?? '';

$stmt = $mysqli->prepare("SELECT email, password FROM users WHERE email =?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()== null)
{
    echo  "User not found. Register!";
    header("Location: ../../Frontend/pages/register.html");
}
else if ($password == $row['password']) {
   header("Location: ../../Frontend/index.html");
} 
else{
    echo "Incorrect password.";
   header("Location: ../../Frontend/pages/login.html");
}
  

?>


