<?php

require "connection.php";

$sql = "SELECT id, category, name, price FROM menus";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
        <table width="100%" border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
            </thead>
        <tbody>
<?php
while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['category']."</td>
        <td>".$row['name']."</td>
        <td>Rp. ".number_format($row['price'])."</td>
    </tr>";
}
?>
        </tbody>
    </table>
<?php
} else {
    echo "0 results";
}
$conn->close();