<?php
    $out = '';

    $conn = new mysqli('localhost', 'root', 'root', 'theaterbalkendam');
    $query = 'SELECT * FROM seizoen_2017_2018 ORDER BY jaar, maand, datum';
    $res = $conn->query($query);

    while($row = $res->fetch_assoc()){
        $out .= '<div class="event">';
        $out .= '<div class="foto_eventen"></div>';
        $out .= '<div class="datum">' . $row['dag'] . $row['datum'] . '-' . $row['jaar'] . '</div>';
        $out .= '<div class="naam_artiest">' . $row['naam'] . '</div>';
        $out .= '<div class="naam_show">' . $row['beschrijving'] . '</div>';
        $out .= '<div class="genre">' . $row['genre'] . '</div>';
        $out .= '<input class="reseveren" type="submit" value="Reserveer">';
        $out .= '<div class="plaatsen">' . rand(1, 200) . ' vrije plaatsen over</div>';
        $out .= '</div>';
    }

    $conn->close();
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Theater Balkendam</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../Assets/StyleSheets/general.css">
        <link rel="stylesheet" href="../Assets/StyleSheets/seizoen.css">
        <script src="../Assets/JavaScript/general.js" defer></script>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <div class="banner">
                    <img class="logo" src="../Img/logo.png" alt="logo">
                </div>
                <nav class="lol">
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="seizoen.php" class="seizoen" >Seizoen 2017/2018</a></li>
                        <li><a href="vrienden.php">Vrienden van TB</a></li>
                        <li><a href="technisch.php">Technisch</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="main">
                <p class="welkom_text">Hier vindt u alle evenementen van seizoen 2017/2018</p>
                <br>
                <div class="basis">
                    <form action="" method="post">
                        <input class="zoeken" title="zoek" placeholder="Zoeken..." type="text">
                    </form>
                    <?php echo $out;?>
                </div>
            </div>
            <div class="footer">©Copyright Theater Balkendam 2017</div>
        </div>
    </body>
</html>