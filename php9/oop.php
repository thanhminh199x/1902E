<?php

class Database {
    public $connection;
    public $ipDatabase;
    public $userDatabase;
    public $passDatabase;
    public $databaseName;
    public function __construct($ipDatabase, $userDatabase, $passDatabase, $databaseName)
    {
        $this->ipDatabase = $ipDatabase;
        $this->userDatabase = $userDatabase;
        $this->passDatabase = $passDatabase;
        $this->databaseName = $databaseName;
        $this->connection = new mysqli($ipDatabase, $userDatabase, $passDatabase, $databaseName);
    }
    public function disconnect() {
        mysqli_close($this->connection);
    }
}

?>