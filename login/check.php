<?php
require('db_connection.php');

if (isset($_POST['submit'])) {

    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT * FROM `login` WHERE user='$username' and pass='$password'";

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        session_start();
        $_SESSION['username'] = $username;
        header("location: ../index.php");
    } else {
        header('location: login.php');
        echo "Your Login Name or Password is invalid";
    }
}
