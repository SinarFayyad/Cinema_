<?php 

require("../Models/Admin.php");
require("../Connection/connection.php");

$admins = [];

$admins[0] = ['name' => 'Sarah Johnson', 'email' => 'sarahJohnson@example.com','password' => password_hash('sarah123', PASSWORD_DEFAULT)];
$admins[1] = ['name' => 'Charbel Smith', 'email' => 'CharbelSmith@example.com','password' => password_hash('charbel123', PASSWORD_DEFAULT)];

foreach($admins as $admin) {
    echo "Seeds/Admins_ ";
    header("location:../create_admin?name={$admin['name']}&email={$admin['email']}&password={$admin['password']}");
}