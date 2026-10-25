<?php
session_start();

$host = 'mydatabase.crqocwg4uqkp.ap-south-1.rds.amazonaws.com';
$db   = 'student_db';
$user = 'admin';
$pass = 'Vertex123';
$port = '3306';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    error_log($ex->getMessage());
    die('Database connection failed.');
}

function e($s) { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }