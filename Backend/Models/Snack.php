<?php 
require_once("Model.php");


class Snack extends Model{
    private int $id;
    private string $name;
    private float $price;
    private bool $available;
    private string $description;

    public static string $table = "Snacks";
    public function __construct(array $array) {
        $this->id = $array["id"];
        $this->name = $array["name"];
        $this->price = $array["price"];
        $this->available = $array["available"];
        $this->description = $array["description"];
    }

    public function getId() :int{
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName():string {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPrice():float {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getDesc() :string{
        return $this->description;
    }

    public function setDesc($description) {
        $this->description = $description;
    }

    public function getAvailable():bool {
        return $this->available;
    }

    public function setAvailable($available) {
        $this->available= $available;
    }

    public function toArray() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'available' => $this->available,
            'description' => $this->description
        ];
    }
}