<?php
$host = 'localhost';
$user = "user";
$password = "Oks_2024";
$database = "lab8";

$conn = new mysqli($host, $user, $password, $database);

if($conn->connect_error)
{
	die("Connection Failed: " . $conn->connect_error);
}

$user_input = $_GET['username'];

$sql = "SELECT * FROM users WHERE username = '$user_input'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Username: " . $row['username'] . "<br>";
    }
} else {
    echo "No results found.";
}

$conn->close();
?>
