<?php

echo "Apis_ ";

$apis = [

    //User apis
    '/users'             => ['controller' => 'UserController', 'method' => 'getUsers'],
    '/create_profile'    => ['controller' => 'UserController', 'method' => 'createProfile'],
    '/delete_profile'    => ['controller' => 'UserController', 'method' => 'deleteProfile'],
    '/update_profile'    => ['controller' => 'UserController', 'method' => 'updateProfile'],

    //Movie apis
    '/movies'            => ['controller' => 'MovieController', 'method' => 'getMovies'],
    '/create_movie'      => ['controller' => 'MovieController', 'method' => 'createMovie'],
    '/delete_movie'      => ['controller' => 'MovieController', 'method' => 'deleteMovie'],
    '/update_movie'      => ['controller' => 'MovieController', 'method' => 'updateMovie'],
    
    //Snack apis
    '/snacks'            => ['controller' => 'SnackController', 'method' => 'getSnacks'],
    '/create_snack'      => ['controller' => 'SnackController', 'method' => 'createSnack'],
    '/delete_snack'      => ['controller' => 'SnackController', 'method' => 'deleteSnack'],
    '/update_snack'      => ['controller' => 'SnackController', 'method' => 'updateSnack'],

    //Seat apis
    '/seats'             => ['controller' => 'SeatController', 'method' => 'getSeats'],
    '/create_seat'       => ['controller' => 'SeatController', 'method' => 'createSeat'],
    '/delete_seat'       => ['controller' => 'SeatController', 'method' => 'deleteSeat'],
    '/update_seat'       => ['controller' => 'SeatController', 'method' => 'updateSeat'],

    //Payment apis
    '/payments'          => ['controller' => 'PaymentController', 'method' => 'getPayments'],
    '/create_payment'    => ['controller' => 'PaymentController', 'method' => 'createPayment'],
    '/delete_payment'    => ['controller' => 'PaymentController', 'method' => 'deletePayment'],
    '/update_payment'    => ['controller' => 'PaymentController', 'method' => 'updatePayment'],

    //Ticket apis
    '/tickets'           => ['controller' => 'TicketController', 'method' => 'getTickets'],
    '/create_ticket'     => ['controller' => 'TicketController', 'method' => 'createTicket'],
    '/delete_ticket'     => ['controller' => 'TicketController', 'method' => 'deleteTicket'], 
    '/update_ticket'     => ['controller' => 'TicketController', 'method' => 'updateTicket'],

    //Admin apis
    '/admins'            => ['controller' => 'AdminController', 'method' => 'getAdmins'],
    '/create_admin'      => ['controller' => 'AdminController', 'method' => 'createAdmin'],
    '/delete_admin'      => ['controller' => 'AdminController', 'method' => 'deleteAdmin'],
    '/update_admin'      => ['controller' => 'AdminController', 'method' => 'updateAdmin'],

    //auth apis
    '/login'             => ['controller' => 'AuthController', 'method' => 'login'],
    '/register'          => ['controller' => 'AuthController', 'method' => 'register']

];


