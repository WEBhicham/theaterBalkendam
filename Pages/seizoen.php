<?php
    $out = '';
    $dir = "../Img/";
    $conn = new mysqli('localhost', 'root', 'root', 'theaterbalkendam');
    $days = array('ma' => 'maandag', 'di' => 'dinsdag', 'wo' => 'woensdag', 'do' => 'donderdag', 'vr' => 'vrijdag', 'za' => 'zaterdag', 'zo' => 'zondag');

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $search = strtolower($_POST['zoek']);
        if (strpos($search, '<') !== false || strpos($search, '>') !== false){
            $search = null;
        }
        if (isset($search) && !empty($search)) {
            foreach ($days as $k => $v) {
                if ($search === $v) {
                    $search = $k;
                }
            }
            if ($search === 'goed zo dorine') {
                $search = "goed zo, dorine!";
            }
            if ($search === 'reprise' || $search === 'try out' || $search === '6+') {
                $search = "($search)";
            }
            if ($search === 'goed zo' || $search === 'korthals' || $search === 'louise korthals' || $search === 'met louise korthals') {
                $search = "$search,";
            }
            if ($search === 'seizoensopening' || strpos($search, 'fiets') !== false && strpos($search,'fiets!') == false || strpos($search, 'dorine') !== false && strpos($search,'dorine!') == false || $search === 'dorine') {
                $search = "$search!";
            }
            if (strpos($search, 'crescendo') !== false) {
                $search = "$search-plus";
            }
            if (strpos($search, 'mysterie') !== false && $search !== 'mysterie...') {
                $search = "$search...";
            }
            $search = $conn->real_escape_string($search);
            $query = "SELECT * FROM seizoen_2017_2018 WHERE naam = '$search' OR naam LIKE '% $search' OR naam LIKE '% $search %' OR naam LIKE '$search %' OR beschrijving = '$search' OR beschrijving LIKE '% $search' OR beschrijving LIKE '% $search %' OR beschrijving LIKE '$search %' OR genre = '$search' OR genre LIKE '% $search' OR genre LIKE '% $search %' OR genre LIKE '$search %' OR dag = '$search' ORDER BY jaar, maand, datum;";
        }else{
            $query = "SELECT * FROM seizoen_2017_2018 ORDER BY jaar, maand, datum;";
        }
    }else{
        $query = "SELECT * FROM seizoen_2017_2018 ORDER BY jaar, maand, datum;";
    }

    $res = $conn->query($query);

    while($row = $res->fetch_assoc()){
        if (empty($row['beschrijving'])){
            $row['beschrijving'] = 'Geen beschrijving';
        }
        $out .= '<div class="event">';
        $out .= "<img class='foto_eventen' src='" . $dir . $row['img'] . "' alt='Foto van " . $row['img'] . "'>";
        $out .= '<div class="datum">' . $row['dag']. ' ' . $row['maand'] . '-' . $row['datum'] . '-' .  $row['jaar'] . '</div>';
        $out .= '<div class="naam_artiest">' . $row['naam'] . '</div>';
        $out .= '<div class="naam_show">' . $row['beschrijving'] . '</div>';
        $out .= '<div class="genre">' . $row['genre'] . '</div>';
        $out .= "<a class=\"reseveren\" href=\"reseveer.php?id=" . $row['idseizoen_2017_2018'] . "\">Reseveer</a>";
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
                <nav>
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
                        <input name="zoek" class="zoeken" title="zoek" placeholder="Zoeken..." type="text">
                    </form>
                    <?php echo $out;?>
                </div>
            </div>
            <footer>© Copyright Theater Balkendam 2017</footer>
        </div>
    </body>
</html>