<?php 

require("../Models/Payment.php");
require("../Connection/connection.php");

$payments = [];

$payments[0] = ['user_name' => 'Nabiha Jaafar',
                'ticket_id' => 1,
                'amount' => 12.50,
                'payment_method' => 'Credit Card'];

$payments[1] = ['user_name' => 'Hassan Al-Mansour',
                'ticket_id' => 2,
                'amount' => 10.00,
                'payment_method' => 'PayPal'];

$payments[2] = ['user_name' => 'Layla Kassem',
                'ticket_id' => 3,
                'amount' => 12.50,
                'payment_method' => 'Debit Card'];

foreach ($payments as $payment) {
    Payment::create($mysqli, $payment);
}