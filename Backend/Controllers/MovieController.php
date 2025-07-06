<?php
require("requireAll.php");
require("UtilityController.php");

function createMovie($mysqli) 
{
    $movie_info=[
        'id' => $_POST['id']?? '',
        'name' => $_POST['name']?? '',
        'cast' => $_POST['cast']?? '',
        'genre' => $_POST['genre']?? '',
        'price' => $_POST['price']?? '',
        'rating' => $_POST['rating']?? '',
        'location' => $_POST['location']?? '',
        'poster_url' => $_POST['poster_url']?? '',
        'trailer_url' => $_POST['trailer_url']?? '',
        'release_year' => $_POST['release_year']?? '',
        'screening_date' => $_POST['screening_date']?? ''
    ];
    
    $sql = create($mysqli, $movies,  $movie_info);
}

function getMovies($mysqli) 
{
    if (isset($_GET['name'])) 
    {
        $name = $_GET['name'];
        fetchByName($mysqli, 'Movie', $name);
    } 
    elseif (isset($_GET['id'])) 
    {
        $id = $_GET['id'];
        fetchByID($mysqli, 'Movie', $id); 
    } 
    else 
    {
        fetchAll($mysqli, 'Movie');  
    }
}

function updateMovie($mysqli) 
{
    if (isset($_GET['name']) && isset($_POST['data'])) 
    {
        $name = $_GET['name'];
        $data = json_decode($_POST['data'], true);
        updateDataByName($mysqli, 'Movie', $data, $name);
        
    } 
    elseif (isset($_GET['id']) && isset($_POST['data'])) 
    {
        $id = $_GET['id'];
        $data = json_decode($_POST['data'], true);
        updateDataByID($mysqli, 'Movie', $data, $id);
        
    } 
    else 
    {
        echo "No identifier or data provided for update.";
    }
}

function deleteMovie($mysqli) 
{
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        deleteDataByID($mysqli, 'Movie', $id);
    } 
    elseif (isset($_GET['name'])) 
    {
        $name = $_GET['name'];
        deleteDataByName($mysqli, 'Movie', $name);
    } 
    else 
    {
        echo "No identifier provided for deletion."; 
    }
}
?>