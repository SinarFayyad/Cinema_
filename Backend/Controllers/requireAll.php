<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

require("../Connection/connection.php");

require("../Models/Admin.php");
require("../Models/Movie.php");
require("../Models/Payment.php");
require("../Models/Seat.php");
require("../Models/Snack.php");
require("../Models/Ticket.php");
require("../Models/User.php");
?>