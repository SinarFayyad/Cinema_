<?php 
abstract class Model{

    protected static string $table;
    protected static string $primary_key = "name";

    public static function create(mysqli $mysqli, $data)
    {
        $key = implode(',', array_keys($data));
        $value = "'" . implode( "','", array_values($data)) ."'";

        $sqlQuery = "INSERT INTO static::$table ($key) VALUES ($value)";
    }

    public static function getAll(mysqli $mysqli){
        $sql = sprintf("Select * from %s", static::$table);
        
        $query = $mysqli->prepare($sql);
        $query->execute();

        $data = $query->get_result();

        $objects = [];
        while($row = $data->fetch_assoc()){
            $objects[] = new static($row); 
        }

        return $objects; 
    }

    public static function findByName(mysqli $mysqli, string $name){
        $sql = sprintf("Select * from %s WHERE %s = ?", 
                        static::$table, 
                        static::$primary_key);
        
        $query = $mysqli->prepare($sql);
        $query->bind_param("s", $name);
        $query->execute();

        $data = $query->get_result()->fetch_assoc();

        return $data ? new static($data) : null;
    }

    public static function findByID(mysqli $mysqli, int $id){
        $sql = sprintf("Select * from %s WHERE %s = ?", 
                        static::$table, 
                        static::$primary_key);
        
        $query = $mysqli->prepare($sql);
        $query->bind_param("i", $id);
        $query->execute();

        $data = $query->get_result()->fetch_assoc();

        return $data ? new static($data) : null;
    }

    public function update(mysqli $mysqli, $data)
    {
        $key = implode(',', array_keys($data));
        $value = "'" . implode( "','", array_values($data)) ."'";

        $sql = sprintf("UPDATE static::$table SET ($key) WHERE ($value)");
        $query = $mysqli->prepare($sql);
        $query->execute();
    }

    public static function delete(mysqli $mysqli, string $name){
        $sql = sprintf("Delete from %s WHERE %s = ?", 
                        static::$table, 
                        static::$primary_key);
        
        $query = $mysqli->prepare($sql);
        $query->bind_param("string", $name);

        $query->execute();
        
    }
}