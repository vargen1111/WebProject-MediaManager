<!DOCTYPE html>
<html>
    <head>
        <title>Movies</title>
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="/public/css/style.css">
        <link rel="stylesheet" type="text/css" href="/public/css/movies.css">
        <link rel="stylesheet" type="text/css" href="/public/css/tiles.css">
        <link rel="stylesheet" type="text/css" href="/public/css/login.css">
    </head>
    <body>
        <div id="header">
            <a href="/public"><div>Home</div></a>
            <a href="/public/movie"><div id="current">Movies</div></a>
            <a href="/public/tvshows"><div>TV-shows</div></a>

            <?php
            if (isset($_SESSION["loggedIn"])) {
                echo "<a id='login' onclick='toggleDialog()'><div>" . $_SESSION["loggedIn"] . "</div></a>";
            } else {
                echo "<a id='login' onclick='toggleDialog()'><div>Login</div></a>";
            }
            ?>
        </div>
        
        <div id="content">
            <?php foreach ($data as $movie) {
                echo "<div class='movie_tile'>";
                echo "<a href='movie/" . $movie["imdbID"] . "'>";
                echo "<img src='" . $movie["Poster"] . "' width='200' height='300'>";
                echo "</div>";
            }?>
        </div>

        <div id="loginBox">
            <form method="POST">
                <?php 
                if (isset($_SESSION["loggedIn"])) {
                    echo "<input type='submit'   name='logout'   value='Logout'>";
                } else {
                    echo "<input type='text'     name='user'  placeholder='Username'>";
                    echo "<input type='password' name='pass'  placeholder='Password'>";
                    echo "<input type='submit'   name='login' value='Login'>";
                    echo "<input type='submit'   name='reg'   value='Register'>"; 
                    echo "<br>";
                    echo "<a href='#'>Forgot password?</a>";
                } ?>
            </form>
        </div>
        <div>
        
        <div id="lightBox" onclick="toggleDialog()"></div>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script type="text/javascript">
           function toggleDialog() {
               if ($("#loginBox").css("display") === "none") {
                   $("#loginBox").css("display", "initial");
                   $("#lightBox").css("display", "initial");
               } else {
                   $("#loginBox").css("display", "none");
                   $("#lightBox").css("display", "none");
               }
           }
        </script>
    </body>
</html>
