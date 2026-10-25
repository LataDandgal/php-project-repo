<?php
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="card">
    <h2>Welcome, <?= e($_SESSION['user_name']) ?>!</h2>
    <p>You are logged in.</p>
    <a class="btn" href="logout.php">Logout</a>
</div>
</body>
</html>
