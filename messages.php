<?php
$host = 'localhost';
$user = "user";
$password = "Oks_2024";
$database = "lab8";
$table = "users";

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

    if (!$stmt->execute()) {
        die($stmt->error);
    }

    $stmt->close();
}

// Fetch and display saved messages
$result = $conn->query("SELECT message FROM messages")->fetch_all();

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vulnerable XSS Example</title>
</head>
<body>
    <h1>Enter a Message</h1>
    <form method="POST" action="/save-message.php">
        <label for="message">Message:</label>
        <input type="text" name="message" id="message" required>
        <button type="submit">Save</button>
    </form>

    <h1>Saved Messages</h1>
    <?php
      foreach($result as $row) {
    ?>
      <p><?php echo $row[0] ?></p>
    <?php
      }
    ?>
</body>
</html>
