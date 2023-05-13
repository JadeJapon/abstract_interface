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
    abstract public function insert(array $params);
    abstract public function update($id, array $params);
}

class user extends Employee
{
    public function insert($params)
{
    }
   $sql = "INSERT INTO Guest (firstname, lastname, email)
VALUES ('Jade', 'Japon', 'jadejapon1@gmail.com')";
{
    }
    $sql = "INSERT INTO Guest (firstname, lastname, email)
VALUES ('Jade', 'Japon', 'jadejapon1@gmail.com')";
{
    }
    $sql = "INSERT INTO Guest (firstname, lastname, email)
VALUES ('Jade', 'Japon', 'jadejapon1@gmail.com')";
{
    }

