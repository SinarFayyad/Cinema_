<?php 

require("../Models/User.php");
require("../Connection/connection.php");

$users = [];

$users[0] = ['name' => 'Nabiha Jaafar', 'email' => 'nabihaJ@example.com', 'password' => password_hash('nabiha123', PASSWORD_DEFAULT)];
$users[1] = ['name' => 'Hassan Al-Mansour', 'email' => 'hassnMansour@example.com', 'password' => password_hash('hassan123', PASSWORD_DEFAULT)];
$users[2] = ['name' => 'Layla Kassem', 'email' => 'LaylaKassem@example.com', 'password' => password_hash('layla123', PASSWORD_DEFAULT)];
$users[3] = ['name' => 'Omar Haddad', 'email' => 'omrHaddad@example.com', 'password' => password_hash('omar123', PASSWORD_DEFAULT)];
$users[4] = ['name' => 'Fatima Al-Sayed', 'email' => 'fatimaSayed@example.com', 'password' => password_hash('fatima123', PASSWORD_DEFAULT)];

foreach($users as $user) {
    User::create($mysqli, $user);
}