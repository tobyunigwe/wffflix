<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/contact.css">

<body>

    <body>

        <div id="container">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <!-- Brand/logo -->
                <a class="navbar-brand" href="#">Logo</a>

                <!-- Links -->
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

            <div id="contact">
                <h3>Contact Opnemen</h3>
                <form action="contactform.php" method="post">
                    <label for="name">Volledige Naam:</label>
                    <br>
                    <input type="text" name="name" placeholder="Volledige naam">
                    <br>
                    <label for="mail">Email:</label>
                    <br>
                    <input type="text" name="mail" placeholder="Email">
                    <br>
                    <label for="subject">Onderwerp:</label>
                    <br>
                    <input type="text" name="subject" placeholder="Onderwerp">
                    <br>
                    <label for="message">Bericht:</label>
                    <br>
                    <textarea name="message" placeholder="Bericht"></textarea><br>
                    <button type="submit" name="Verzend">stuur bericht</button><br>
                </form>
            </div>
        </div>
    </body>

</html>