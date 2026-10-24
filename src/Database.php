<?php

class Database
{
    public $username;
    public $servername;
    public $password;
    public $database;

    public function __construct(mixed $username, mixed $servername, mixed $password, string $database)
    {
        $this->servername = $servername;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;

         $this->connect();
    }

    public function connect()
    {
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn; 
        } catch (PDOException $e) {
            echo "Ma'lumotlar bazasi ishlamayabdi " . $e->getMessage();
        }
    }
}
