<?php

abstract class Employee
{
    public $conn;
    public $servername ="localhost";
    public $username ="root";
    public $password ="";
    public $dbname = "myDB";
    public function_construct($conn)
{
    $this->conn=new mysqli($this->servername, $this->username, $this->password, $this->dbname);
}
    abstract public function insert():string;
}

class dbname extends Employee
{
    public function db():string
    {
        $dbname="CREATE DATABASE IF NOT EXISTS $this->dbname";
        return $this->conn->query($dbname);
}



