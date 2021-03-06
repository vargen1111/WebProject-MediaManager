<!DOCTYPE html>
<html>
    <head>
        <title>Movies</title>
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="/public/css/style.css">
        <link rel="stylesheet" type="text/css" href="/public/css/movies.css">
        <link rel="stylesheet" type="text/css" href="/public/css/tiles.css">
        <link rel="stylesheet" type="text/css" href="/public/css/login.css">
        <link rel="stylesheet" type="text/css" href="/public/css/header.css">
        
        <script type="text/javascript" src="/public/js/ajax.js"></script>
    </head>
    <body>
        <div id="header">
            <a href="/public"><div class="button">Home</div></a>
            <a href="/public/movie"><div class="button current">Movies</div></a>
            <a href="/public/tvshows"><div class="button">TV-shows</div></a>

            <?php require_once '../app/modules/login.php'; ?>
        </div>
        
        <div id="content">
            <?php foreach ($data["movies"] as $movie) { ?>
                <div class="movie_tile">
                    <img onclick="window.location='movie/<?=$movie["imdbID"]?>'" src="<?=$movie["Poster"]?>" alt="<?=$movie["imdbID"]?>">
                    <?php if (isset($_SESSION["loggedIn"])) {
                            if (in_array($movie["imdbID"], $data["views"])) {
                                echo '<div class="watched" id="' . $movie["imdbID"] . '"></div>';
                            } else {
                                echo '<div class="watch" id="' . $movie["imdbID"] . '" onclick="setseen(this.id)"></div>';
                            }
                        } ?>
                </div>
            <?php }?>
        </div>
    </body>
</html>
