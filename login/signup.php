<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="login.css">
    <title>Register</title>
</head>

<body>
    <div id="container">
        <div id="container">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link 3</a>
                    </li>
                </ul>
            </nav>
            <div id="container-login">
                <center>
                    <h3>Register</h3>
                </center>
                <hr>
                <form method="POST" action="check_registration.php">
                    <label for="username">New username:</label><br>
                    <input type="text" name="username" autocomplete="off" required><br>
                    <label for="password">New password:</label><br>
                    <input type="password" name="password" autocomplete="off" required><br>
                    <!-- <label for="email">New email:</label><br>
                    <input type="email" name="password" id="password" required><br>
                    <br> -->
                    <button type="submit" class="btn btn-success" name="submit">Success</button>
                </form>
                <p>Login <a href="login.php">here</a></p>
                <p name="error-message"></p>
            </div>
        </div>
</body>

</html>