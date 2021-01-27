<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wfflix";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("The connection failed: " . $conn->connect_error);
}
