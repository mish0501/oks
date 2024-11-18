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

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input
    $user_input = $_POST['message'];

    // Save input to the database using a prepared statement
    $stmt = $conn->prepare("INSERT INTO messages (message) VALUES (?)");
    $stmt->bind_param("s", $user_input);

    if ($stmt->execute()) {
        echo "Message saved successfully!<br>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();

header('Location: /messages.php');
die();
?>