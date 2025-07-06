<?php 

require("../Models/Movie.php");
require("../Models/Model.php");
require("../Connection/connection.php");

$movies = [];

$movies[0] = ['title' => 'Inception', 'director' => 'Christopher Nolan', 'release_year' => 2010, 'genre' => 'Science Fiction'];
$movies[1] = ['title' => 'The Godfather', 'director' => 'Francis Ford Coppola', 'release_year' => 1972, 'genre' => 'Crime'];
$movies[2] = ['title' => 'The Dark Knight', 'director' => 'Christopher Nolan', 'release_year' => 2008, 'genre' => 'Action'];
$movies[3] = ['title' => 'Pulp Fiction', 'director' => 'Quentin Tarantino', 'release_year' => 1994, 'genre' => 'Crime'];

foreach($movies as $movie) {
    Movie::create($mysqli, $movie);
}