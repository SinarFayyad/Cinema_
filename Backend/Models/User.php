<?php
require_once("Model.php");


class User extends Model {
    private int $id;
    private string $name;
    private int $age;
    private string $address;
    private string $email;
    private string $password;

    public static string $table = "Users";

    public function __construct(array $array) {
        $this->id = $array["id"];
        $this->name = $array["name"];
        $this->age = $array["age"];
        $this->address =$address["address"];
        $this->email = $array["email"];
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
            'name' => $this->name,
            'age' => $this->age,
            'email' => $this->email,
            'password' => $this->password,
            'address'=>$this->address
        ];
    }
}
