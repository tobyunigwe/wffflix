<?php
require('db_connection.php');


if (isset($_POST['submit'])) {

    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);
    // $email = strip_tags($_POST['email']);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    // $email = mysqli_real_escape_string($conn, $email);

    $query = "SELECT * FROM `login` WHERE user='$username' and pass='$password'";

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        header('location: login.php');
        echo "This account already exists";
        die();
    } else {
        $sql = "INSERT INTO `login` (user, pass)
        VALUES ('$username', '$password')";
        mysqli_query($conn, $sql);
        $_SESSION['success'] = "test";
        header('location: login.php');
    }
}
