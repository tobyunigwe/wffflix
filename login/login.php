<?php
session_start();

if (!empty($_SESSION['success'])) {
    echo "worked";
} else {
    echo <<<EOT
    <style type="text/css">#logout{
        display:none;
        }</style>
    EOT;
}

?>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>

<body>
    <div id="container">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" id="login_nav">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php" id="logout">Logout</a>
                </li>
            </ul>
        </nav>
        <div id="container-login">
            <center>
                <h3>Login</h3>
            </center>
            <hr>
            <form method="POST" action="check.php">
                <label for="username">Username:</label><br>
                <input type="text" name="username" autocomplete="off" required><br>
                <label for="password">Password:</label><br>
                <input type="password" name="password" id="password" required>
                <br>
                <br>
                <button type="submit" class="btn btn-success" name="submit">Success</button>
            </form>
            <p>No account? Click <a href="signup.php">here</a></p>
            <p name="error-message"></p>
        </div>
    </div>
</body>

</html>