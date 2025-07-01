<?php
require_once("Model.php");


class Movie extends Model{
    private int $id;
    private string $name;
    private string $cast;
    private string $genre;
    private float  $price;
    private float $rating;
    private string $location;
    private string $poster_url;
    private string $trailer_url;
    private YEAR $release_year;
    private DATETIME $screening_date;
    
    
    public static string $table = "Movies";

    public function __construct(array $array) {
        $this->id = $array["id"];
        $this->name = $array["name"];
        $this->cast = $array["cast"];
        $this->genre = $array["genre"];
        $this->price = $array["price"];
        $this->rating = $array["rating"];
        $this->location = $array["location"];
        $this->poster_url = $array["poster_url"];
        $this->trailer_url = $array["trailer_url"];
        $this->release_year = $array["release_year"];
        $this->screening_date = $array["screening_date"];
    }

    
    public function getId(): int {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName(): string{
        return $this->name;
    }

    public function setName($name) {
        $this->name= $name;
    }

    public function getGenre() :string{
        return $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    public function getReleaseYear() :YEAR{
        return $this->release_year;
    }

    public function setReleaseYear($release_year) {
        $this->release_year = $release_year;
    }

    public function getScreeningDate(): DATETIME  {
        return $this->screening_date;
    }

    public function setScreeningDate($screening_date) {
        $this->screening_date = $screening_date;
    }

    public function getPrice():float {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getLocation():string {
        return $this->location;
    }

    public function setLocation($location) {
        $this->location = $location;
    }

    public function getPosterUrl() :string{
        return $this->poster_url;
    }

    public function setPosterUrl($poster_url) {
        $this->poster_url = $poster_url;
    }

    public function getCast() :string{
        return $this->cast;
    }

    public function setCast($cast) {
        $this->cast = $cast;
    }

    public function getRating():float {
        return $this->rating;
    }

    public function setRating($rating) {
        $this->rating = $rating;
    }

    public function getTrailerUrl() :string{
        return $this->trailer_url;
    }

    public function setTrailerUrl($trailer_url) {
        $this->trailer_url = $trailer_url;
    }

    public function toArray() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'cast' => $this->cast,
            'genre' => $this->genre,
            'price' => $this->price,
            'rating' => $this->rating,
            'location' => $this->location,
            'poster_url' => $this->poster_url,
            'trailer_url' => $this->trailer_url,
            'release_year' => $this->release_year,
            'screening_date' => $this->screening_date->format('Y-m-d H:i:s')          
            
        ];
    }
}

