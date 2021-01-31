<?php
declare(strict_types = 1);

class Storage {
    public function insert($name) {
    $conn = new PDO('mysql:dbname=testdb;host=127.0.0.1', 'root' , 'mysql');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);       
    $stmt = $conn->prepare("INSERT INTO new_table (name) VALUES (:name)");
    $stmt->bindParam(":name", $name);
    $stmt->execute(); 
    echo "New record added to database";
    $this->conn = null;
}
}