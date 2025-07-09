<?php 

require("../Models/Snack.php");
require("../Connection/connection.php");

$snacks = [];

$snacks[0] = ['name' => 'Popcorn', 'size' => 'Large', 'price' => 5.00, 'available' => true];
$snacks[1] = ['name' => 'Nachos', 'size' => 'Medium', 'price' => 4.50, 'available' => true];
$snacks[2] = ['name' => 'Soda', 'size' => 'Large', 'price' => 3.00, 'available' => true];
$snacks[3] = ['name' => 'Candy', 'size' => 'Small', 'price' => 2.50, 'available' => true];

foreach($snacks as $snack) {
    Snack::create($mysqli, $snack);
}