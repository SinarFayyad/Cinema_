<?php

echo "Admin_ ";
require_once("Model.php");
echo "Admin2_ ";

class Admin extends Model {
    
    private string $name;
    private string $email;
    private string $password;

    protected static string $table = "admins";

    public function __construct(array $array) {

        $this->name = $array["name"];
        $this->email = $array["email"];
        $this->password = $array["password"];
        echo "Constructor_ ";
    }

    public function getId():int  {
        return $this->id;
    }

    public function getName():string {
        return $this->name;
    }
    public function setUsername($name) {
        $this->name = $name;
    }

    public function getEmail():string {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword():string  {
        return $this->password;
    }
    public function setPassword($password) {
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
