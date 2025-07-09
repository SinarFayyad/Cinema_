<?php
require("UtilityController.php");
require("./Models/Movie.php");

class MovieController {
    
    function createMovie($mysqli) 
    {
        $movie_info=[
            'id' => $_GET['id']?? '',
            'name' => $_GET['name']?? '',
            'cast' => $_GET['cast']?? '',
            'genre' => $_GET['genre']?? '',
            'price' => $_GET['price']?? '',
            'rating' => $_GET['rating']?? '',
            'location' => $_GET['location']?? '',
            'poster_url' => $_GET['poster_url']?? '',
            'trailer_url' => $_GET['trailer_url']?? '',
            'release_year' => $_GET['release_year']?? '',
            'screening_date' => $_GET['screening_date']?? ''
        ];
        
        $sql = createData($mysqli, 'Movie',  $movie_info);
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
}
?>