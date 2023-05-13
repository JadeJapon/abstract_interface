<?php

abstract class Brand
{
    public $conn;
    public $servername ="localhost";
    public $username ="root";
    public $password ="";
    public function_construct($conn)
{
    $this->conn=new mysqli($this->servername, $this->username, $this->password);
}
    abstract public function insert(array $params);
    abstract public function update($id, array $params);
}

class user extends Brand
{
    public function insert($params)
{
   }
      public function update($id, array $params)
{

}

