<?php
require_once("Model.php");

class Ticket extends Model {
    private int $id;
    private int $seat_id;
    private string $user_name;
    private string $movie_name;
    private float $movie_price;
    private float $snacks_price;
    private DateTime $screening_time;

    public static string $table = "tickets";

    public function __construct(array $array){
        $this->id = $array["id"];
        $this->seat_id = $array["seat_id"];
        $this->user_name = $array["user_name"];
        $this->movie_name = $array["movie_name"];
        $this->movie_price = $array["movie_price"];
        $this->snacks_price = $array["snacks_price"];
        $this->$screening_time = $array["$screening_time"];
    }

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function getUserName(): string {
        return $this->user_name;
    }

    public function setUserName(string $user_name){
        $this->user_name = $user_name;
    }

    public function getMovieName(): string{
        return $this->movie_name;
    }

    public function setMovieName(string $movie_name){
        $this->movie_name = $movie_name;
    }

    public function getSeatID(): int {
        return $this->seat_id;
    }

    public function setSeatID(int $seat_id){
        $this->seat_id = $seat_id;
    }

    public function getSnacksPrice(): float {
        return $this->snacks_price;
    }

    public function setSnacksPrice(float $snacks_price){
        $this->snacks_price = $snacks_price;
    }

     public function getMoviePrice(): float {
        return $this->movie_price;
    }

    public function setMoviePrice(float $movie_price){
        $this->movie_price = $movie_price;
    }

    public function getscreening_time(): DateTime {
        return $this->screening_time;
    }

    public function setscreening_time(DateTime $screening_time): void {
        $this->screening_time = $screening_time;
    }

    public function toArray(): array {
        return [
            'id' => $this->id,
            'seat_id'=> $this->seat_id,
            'user_name' => $this->user_name,
            'movie_name' => $this->movie_name,
            'movie_price' => $this->movie_price,
            'snacks_price'=> $this->snacks_price,
            'screening_time' => $this->screening_time->format('Y-m-d H:i:s')
        ];
}
}
