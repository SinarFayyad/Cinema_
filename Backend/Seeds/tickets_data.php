<?php 

require("../Models/Ticket.php");
require("../Connection/connection.php");

$tickets = [];

$tickets[0] = ['user_name' => 'Nabiha Jaafar',
                'movie_name' => 'Brave Citizen',
                'screening_time' => '2023-10-01 19:00:00',
                'seat_row_number' => 1,
                'seat_column_number' => 1,
                'movie_price' => 12.50,
                'snacks_name' => 'Popcorn'];

$tickets[1] = ['user_name' => 'Hassan Al-Mansour',
                'movie_name' => 'Midnight',
                'screening_time' => '2023-10-02 21:00:00',
                'seat_row_number' => 1,
                'seat_column_number' => 1,
                'movie_price' => 10.00,
                'snacks_name' => 'Nachos'];

$tickets[2] = ['user_name' => 'Layla Kassem',
                'movie_name' => 'Brave Citizen',
                'screening_time' => '2023-10-01 19:00:00',
                'seat_row_number' => 1,
                'seat_column_number' => 2,
                'movie_price' => 12.50,
                'snacks_name' => 'Soda'];

foreach($tickets as $ticket) {
    Ticket::create($mysqli, $ticket);
}