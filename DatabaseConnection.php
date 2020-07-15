<?php

class DatabaseConnection 
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "covid19_form";
    //public static $connection;
    public $conn;

    public function __construct() {
        // Create & Check Connection
        $this->conn = mysqli_connect($this->server, $this->username, $this->password, $this->db);
        if (!$this->conn) {
            throw new Exception("Connection failed");
        }
        //Select The Database
        $selectedDB = mysqli_select_db($this->conn, $this->db);
        if (!$selectedDB) {
            echo "No database is selected!</br>";}
        
    }
    
    /*public static function connect() {
        self::$connection = mysqli_connect($this->server,$this->username,$this->password,$this->db);
        if(!isset(self::$connection)) {
            self::$connection = null;
        }
        return self::$connection;
    }*/
    
}
