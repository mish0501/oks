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

$result = $conn->query("SELECT name FROM lab8.users")->fetch_all();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
</head>
<body>
  <h2>Users</h2>
  <ol>
    <?php 
      foreach ($result as $row) {
    ?>
      <li><?php echo $row[0] ?></li>
    <?php
      }
    ?>
  </ol>
</body>
</html>