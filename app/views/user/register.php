<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="/public/css/style.css">
        <link rel="stylesheet" type="text/css" href="/public/css/header.css">
    </head>
    <body>
        <div id="header">
            <a href="/public"><div class="button">Home</div></a>
            <a href="/public/movie"><div class="button">Movies</div></a>
            <a href="/public/tvshows"><div class="button">TV-shows</div></a>
        </div>
        
        <div id="content">
            <form method="POST">
                <?php
                if (isset($data["userTaken"])) {
                    echo "<input type='text' name='user' placeholder='Username' style='border-color:red;' required>";
                } else {
                    echo "<input type='text' name='user' placeholder='Username' required>";
                }

                echo "<br>";

                if (isset($data["emailInvalid"]) || isset($data["emailTaken"])) {
                    echo "<input type='text' name='email' placeholder='E-Mail' style='border-color:red;' required>";
                } else {
                    echo "<input type='text' name='email' placeholder='E-Mail' required>";
                }

                echo "<br>";
                echo "<input type='password' name='pass' placeholder='password' required>";
                echo "<br>";

                if (isset($data["passNoMatch"])) {
                    echo "<input type='password' name='cpass' placeholder='confirm password' style='border-color:red;' required>";
                } else {
                    echo "<input type='password' name='cpass' placeholder='confirm password' required>";
                }

                echo "<br>";
                echo "<input type='submit' value='Register' name='register'>";
                ?>
            </form>
        </div>
    </body>
</html>
