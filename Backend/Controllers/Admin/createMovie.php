<?php
require("../requireAll.php");

function createMovie($mysqli) {
    $movie_info={
        $id = $_POST["id"];
        $name = $_POST["name"];
        $cast = $_POST["cast"];
        $genre = $_POST["genre"];
        $price = $_POST["price"];
        $rating = $_POST["rating"];
        $location = $_POST["location"];
        $poster_url = $_POST["poster_url"];
        $trailer_url = $_POST["trailer_url"];
        $release_year = $_POST["release_year"];
        $screening_date = $_POST["screening_date"];
    }

    $sql = create($mysqli, $movies,  $movie_info);
    if ($sql) {
        echo "Movie created successful!";
    } else {
        echo "Error: ". $stmt->error;
    }
    

}

?>
    


