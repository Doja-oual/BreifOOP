<?php
      
require_once __DIR__. '../config/config.php';

class Model{
    private $conn;
    private $table;

    // public function  __construct($db){
    //     $this->conn=$db;

    // }
    public static function show($table) {
        $con=Database::getConnection(); 
        $sql = "SELECT * FROM $table ";
        $query = $con->prepare($sql);
        $query->execute();    
        return $query->fetch(PDO::FETCH_ASSOC);
    }


    public  static function addPlayers($table,$data) {
        $con=Database::getConnection();
        $columns = implode(",", array_keys($data));
        $values = ":" . implode(", :", array_keys($data));  
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        $stmt = $con->prepare($sql);
    
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value); }
        return $stmt->execute();
    }
    
}


?>
