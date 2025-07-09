<?php 

require("../Models/Seat.php");
require("../Connection/connection.php");

$seats = [];

$seats[0] = ['`row_number`' => 1, 'column_number' => 1, 'available' => FALSE];
$seats[1] = ['`row_number`' => 1, 'column_number' => 2, 'available' => FALSE];
$seats[2] = ['`row_number`' => 2, 'column_number' =>1, 'available' => FALSE];

foreach($seats as $seat) {
    Seat::create($mysqli, $seat);
}