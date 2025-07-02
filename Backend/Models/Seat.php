<?php
require_once("Model.php");

class Seat extends Model {
    private int $id;
    private string $movie_name;
    private bool $is_available;
    private string $row_number;
    private string $column_number;
    public static string $table = "Seats";

    public function __construct(array $array) {
        $this->id = $array["id"];
        $this->movie_name = $array["movie_name"];
        $this->row_number = $array["row_number"];
        $this->column_number = $array["column_number"];
        $this->is_available = $array["is_available"];
    }

    public function getId() :int{
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getColumnNumber():string {
        return $this->column_number;
    }

    public function setColumnNumber($column_number) {
        $this->column_number = $column_number;
    }

    public function getRowNumber() :string{
        return $this->row_number;
    }

    public function setRowNumber($row_number) {
        $this->row_number = $row_number;
    }

    public function isAvailable() :bool{
        return $this->is_available;
    }

    public function setIsAvailable($is_available) {
        $this->is_available = $is_available;
    }

    public function getMovieName():string {
        return $this->movie_name;
    }

    public function setMovieName($movie_name) {
        $this->movie_name = $movie_name;
    }

    public function toArray() {
        return [
            'id' => $this->id,
            'movie_name' => $this->movie_name,
            'row_number' => $this->row_number,
            'column_number' => $this->column_number,
            'is_available' => $this->is_available,
        ];
    }
}
