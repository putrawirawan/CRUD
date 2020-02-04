<?php

class Connection
{
    const SERVERNAME = "localhost";
    const USERNAME = "root";
    const PASSWORD = "";
    const DATABASE = "restaurant";
    public $conn;

    function start()
    {
        $this->conn = new mysqli(self::SERVERNAME, self::USERNAME, self::PASSWORD, self::DATABASE)
        ;

        // check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        // echo "Connection Successfully";
        return $this->conn;
    }

    function stop()
    {
        $this->conn->close();($sql);
    }

}


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "restaurant";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
?>