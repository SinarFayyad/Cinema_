<?php
require("../requireAll.php");

function createTicket($mysqli) {
    $ticket_info={
    $seat_id = $_POST['seat_id']?? '';
    $user_name = $_POST['user_name']?? '';
    $movie_name = $_POST['movie_name']?? '';
    $movie_price = $_POST['movie_price']?? '';
    $snacks_price = $_POST['snacks_price']?? '';
    $screening_time = $_POST['screening_time']?? '';
    }

    $sql = create($mysqli, $ticket_info);
    if ($sql)
    {
        return "done successfully!"
    }
    else {
        return "Error";
    }

}

?>