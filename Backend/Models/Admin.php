<?php
require_once("Model.php");

class Admin extends Model {
    private int $id;
    private string $name;
    private string $email;
    private string $password;

    public static string $table = "Admins";

    public function __construct(array $array) {
        $this->id = $array["id"];
        $this->name = $array["name"];
        $this->email = $array["email"];
        $this->password = $array["password"];
    }

    public function getId():int  {
        return $this->id;
    }
    public function setId(int $id) {
        $this->id = $id;
    }

    public function getName():string {
        return $this->name;
    }
    public function setUsername(string $Name) {
        $this->name = $name;
    }

    public function getEmail():string {
        return $this->email;
    }
    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function getPassword():string  {
        return $this->password;
    }
    public function setPassword(string $password) {
        $this->password = $password;
    }

    public function toArray() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ];
    }

    
}

