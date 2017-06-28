<?php
    $today = getdate();
    $d = $today['mday'];
    $m = $today['mon'];
    $y = $today['year'];
    $out = $query = '';
    $i = 0;
    $dir = "Img/";
    $conn = new mysqli('localhost', 'root', 'root', 'theaterbalkendam');

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $search = strtolower($_POST['zoek']);

        if (strpos($search, '<') !== false || strpos($search, '>') !== false){
            $search = null;
        }
        if (isset($search) && !empty($search)) {
            $search = $conn->real_escape_string($search);
            $query = "SELECT * FROM seizoen_2017_2018 WHERE genre = '$search' AND ((jaar = $y AND datum >= $d AND maand >= $m) OR (jaar = $y AND maand > $m) OR jaar > $y) ORDER BY jaar, maand, datum;";
        }else{
                $query = "SELECT * FROM seizoen_2017_2018 WHERE (jaar = $y AND datum >= $d AND maand >= $m) OR (jaar = $y AND maand > $m) OR jaar > $y ORDER BY jaar, maand, datum;";
        }
    }else{
        $query = "SELECT * FROM seizoen_2017_2018 WHERE (jaar = $y AND datum >= $d AND maand >= $m) OR (jaar = $y AND maand > $m) OR jaar > $y ORDER BY jaar, maand, datum;";
    }

    $res = $conn->query($query);

    while($row = $res->fetch_assoc()){
            if (empty($row['beschrijving'])){
            $row['beschrijving'] = 'Geen beschrijving';
        }
            $out .= '<div class="event">';
            $out .= "<img class='foto_eventen' src='" . $dir . $row['img'] . "' alt='Foto van " . $row['img'] . "'>";
            $out .= '<div class="datum">' . $row['dag'] . ' ' . $row['maand'] . '-' . $row['datum'] . '-' .  $row['jaar'] . '</div>';
            $out .= '<div class="naam_artiest">' . $row['naam'] . '</div>';
            $out .= '<div class="naam_show">' . $row['beschrijving'] . '</div>';
            $out .= '<div class="genre">' . $row['genre'] . '</div>';
            $out .= '<input class="reseveren" type="submit" value="Reserveer">';
            $out .= '<div class="plaatsen">' . rand(1, 200) . ' vrije plaatsen over</div>';
            $out .= '</div>';
            $i++;
            if ($i === 4){
                break;
            }
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
                <?php echo $out;?>
                <div class="top_vrienden">
                    <p class="vriend_kop">De top 3 vrienden van het theater.</p>
                    <p class="vriend_1">1. <span style="padding-left: 5em">Mike de Groot (sql)</span></p>
                    <p class="bedrag_1">€ 1.259,- (sql)</p>
                    <p class="vriend_2">2. <span style="padding-left: 5em">Heidi Bloemen (sql)</span></p>
                    <p class="bedrag_2">€ 1.000,- (sql)</p>
                    <p class="vriend_3">3. <span style="padding-left: 5em">Jan Keizer (sql)</span></p>
                    <p class="bedrag_3">€ 897,50 (sql)</p>
                </div>
            </div>
            <footer class="footer">© Copyright Theater Balkendam 2017</footer>
        </div>
    </body>
</html>