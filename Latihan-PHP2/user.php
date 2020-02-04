<?php 

require "Connection.php";

class user extends connection
{
    public $conn;
    protected $table = 'users';

    function __construct()
    {
        $this->conn = parent::start();
    }

    function all($field = '*')
    {
        $sql = "SELECT $field FROM ". $this->table;
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

    function find($id)
    {
        $sql = "SELECT * FROM ". $this->table. " WHERE id = $id";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
        // return $sql;
    }

    function create($payloads)
    {
        $password = password_hash($payloads['password'], PASSWORD_DEFAULT);
        $sql = "INSERT INTO ". $this->table. " (username, email, password, name) VALUES (
            '".$payloads['username']."',
            '".$payloads['email']."',
            '".$password."',
            '".$payloads['name']."'
        )";

        return $this->conn->query($sql);
    }
    


    function login($payloads)
    {
        $sql = "SELECT * FROM users WHERE username='".$payloads['username']."' OR email ='".$payloads['email']."'";

        return $this->conn->query($sql);
    }

}

// $menus = new menus();
// $payloads = [
//     'name' => 'ayam goreng',
//     'category' => 'Makanan',
//     'price' => 10000
// ];
// $data = $menus->all();
// var_dump($data);

?>