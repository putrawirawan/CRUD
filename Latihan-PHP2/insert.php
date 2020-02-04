<?php

require "connection.php";

$sql = "INSERT INTO menus (category, name, price)
VALUES ('minuman', 'es teh', '5000')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>