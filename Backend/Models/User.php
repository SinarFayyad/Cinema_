<?php
require_once("Model.php");


class User extends Model {
    private int $id;
    private int $age;
    private string $name;
    private string $email;
    private string $address;
    private string $password;

    public static string $table = "Users";

    public function __construct(array $array) {
        $this->id = $array["id"];
        $this->age = $array["age"];
        $this->name = $array["name"];
        $this->email = $array["email"];
        $this->address =$address["address"];
        $this->password = $array["password"];
    }

    public function getId() :int {
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

    public function getAge() :int {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

      public function getAddress():string {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getEmail(): string{
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() :string {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function toArray() {
        return [
            'id' => $this->id,
            'age' => $this->age,
            'name' => $this->name,
            'email' => $this->email,
            'address'=> $this->address,
            'password' => $this->password
        ];
    }
}
