<?php 

require("../Models/Movie.php");
require("../Models/Model.php");
require("../Connection/connection.php");

$movies = [];

$movies[0]= ['title' => 'Brave Citizen',
             'genre' => 'Action', 
             'release_year' => 2023, 
             'screening_date' => '2023-10-01 19:00:00', 
             'price' => 12.50, 
             'location' => 'Cinema A', 
             'poster_url' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSzuYmaSOFfSNJgMrVcnJcUmJc0z-dvo5u9oTEnIwS8hrzozM9I5k3v6Bi-hFtWsv1zq82AsQ', 
             'cast' => 'Lee Jun-young, Cha Woo-min, Shin Hye-sun, Park Jung-woo', 
             'rating' => 6.5, 
             'trailer_url' => 'https://youtu.be/1LinV73o7WM?si=SSJw9GJR4ANez6OX'];

$movies[1] = ['title'=> 'Midnight',
                'genre' => 'Thriller', 
                'release_year' => 2023, 
                'screening_date' => '2023-10-02 21:00:00', 
                'price' => 10.00, 
                'location' => 'Cinema B', 
                'poster_url' => 'https://asianwiki.com/images/2/25/Midnight-KM-mp01.jpg',
                'cast' => 'Wi Ha-Joon, Jin Ki-Joo, Jeong Won-Chang, Park Hoon', 
                'rating' => 7.2, 
                'trailer_url' => 'https://youtu.be/3Ap4ww9Ap-0?si=dxGwKn5et0LGzX7-'];

foreach($movies as $movie) {
    Movie::create($mysqli, $movie);
}