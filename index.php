<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Manager</title>
</head>
<body>

<h1>Password Manager</h1>
<form method="post">
    <h2>Add a Password</h2>
    <label for="website">Website:</label>
    <input type="text" name="website" required>
    <br>
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <br>
    <button type="submit" name="addPassword">Add Password</button>
</form>


<form method="post">
    <button type="submit" name="viewPasswords">View All Passwords</button>
</form>