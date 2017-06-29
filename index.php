<?php
    $today = getdate();
    $d = $today['mday'];
    $m = $today['mon'];
    $y = $today['year'];
    $outevents = $outvrienden = $query = '';
    $dir = "Img/";
    $conn = new mysqli('localhost', 'root', 'root', 'theaterbalkendam');
    $i = 1;

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $search = strtolower($_POST['zoek']);

        if (strpos($search, '<') !== false || strpos($search, '>') !== false){
            $search = null;
        }
        if (isset($search) && !empty($search)) {
            $search = $conn->real_escape_string($search);
            $query = "SELECT * FROM seizoen_2017_2018 WHERE genre = '$search' AND ((jaar = $y AND datum >= $d AND maand >= $m) OR (jaar = $y AND maand > $m) OR jaar > $y) ORDER BY jaar, maand, datum LIMIT 4;";
        }else{
                $query = "SELECT * FROM seizoen_2017_2018 WHERE (jaar = $y AND datum >= $d AND maand >= $m) OR (jaar = $y AND maand > $m) OR jaar > $y ORDER BY jaar, maand, datum LIMIT 4;";
        }
    }else{
        $query = "SELECT * FROM seizoen_2017_2018 WHERE (jaar = $y AND datum >= $d AND maand >= $m) OR (jaar = $y AND maand > $m) OR jaar > $y ORDER BY jaar, maand, datum LIMIT 4;";
    }

    $res = $conn->query($query);

    while($row = $res->fetch_assoc()){
            if (empty($row['beschrijving'])){
            $row['beschrijving'] = 'Geen beschrijving';
        }
            $outevents .= '<div class="event">';
            $outevents .= "<img class='foto_eventen' src='" . $dir . $row['img'] . "' alt='Foto van " . $row['img'] . "'>";
            $outevents .= '<div class="datum">' . $row['dag'] . ' ' . $row['maand'] . '-' . $row['datum'] . '-' .  $row['jaar'] . '</div>';
            $outevents .= '<div class="naam_artiest">' . $row['naam'] . '</div>';
            $outevents .= '<div class="naam_show">' . $row['beschrijving'] . '</div>';
            $outevents .= '<div class="genre">' . $row['genre'] . '</div>';
            $outevents .= '<input class="reseveren" type="submit" value="Reserveer">';
            $outevents .= '<div class="plaatsen">' . rand(1, 200) . ' vrije plaatsen over</div>';
            $outevents .= '</div>';
    }
    $conn->close();

    $conn = new mysqli('localhost', 'root', 'root', 'theaterbalkendam');
    $query = 'SELECT * FROM (SELECT * FROM vrienden ORDER BY bedrag DESC LIMIT 3) AS test ORDER BY bedrag DESC;';
    $res = $conn->query($query);

    while($row = $res->fetch_assoc()){
        $bedrag = "€ " . $row['bedrag'];
        if (strpos($bedrag, '.') !== false){
            $bedrag = str_replace('.', ',', $bedrag);
        }else{
            $bedrag = $bedrag . ",-";
        }
        $outvrienden .= "<p class='vriend_$i'>$i. <span class='span3'>" . $row['naam'] . "</span></p>";
        $outvrienden .= "<p class='bedrag_$i'>" . $bedrag. "</p>";
        $i++;
    }
    $conn->close();
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Theater Balkendam</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="Assets/StyleSheets/general.css">
        <link rel="stylesheet" href="Assets/StyleSheets/index.css">
        <script src="Assets/JavaScript/general.js" defer></script>
        <style>
            .span3{
                padding-left: 5em;
            }s
        </style>
    </head>
    <body>
        <div class="container">
            <header class="header">
                <div class="banner">
                    <img class="logo" src="Img/logo.png" alt="logo">
                </div>
                <nav>
                    <ul>
                        <li><a href="#" class="home">Home</a></li>
                        <li><a href="Pages/seizoen.php">Seizoen 2017/2018</a></li>
                        <li><a href="Pages/vrienden.php">Vrienden van TB</a></li>
                        <li><a href="Pages/technisch.php">Technisch</a></li>
                        <li><a href="Pages/contact.php">Contact</a></li>
                    </ul>
                </nav>
            </header>

            <div class="main">
                <p class="welkom_text">Welkom op de site van Theater Balkendam</p>
                <p class="event_text">Eerst volgende evenementen</p>
                <form action="" method="post" enctype="multipart/form-data">
                    <input class="zoekfunctie" name="zoek" title="zoek" type="text" placeholder="Zoek op genre">
                </form>
                <?php echo $outevents;?>
                <div class="top_vrienden">
                    <p class="vriend_kop">De top 3 vrienden van het theater.</p>
                    <?php echo $outvrienden;?>
                </div>
            </div>
            <footer class="footer">© Copyright Theater Balkendam 2017</footer>
        </div>
    </body>
</html>