<?php

$servername = "localhost:8084";
$username = "root";
$password = "root";
$dbname = "tasks";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
};