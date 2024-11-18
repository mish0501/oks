<!DOCTYPE html>
<html>
<head>
    <title>Vulnerable SQL Injection Form</title>
</head>
<body>
    <h1>Search User</h1>
    <form method="GET" action="/search.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <button type="submit">Search</button>
    </form>
</body>
</html>
