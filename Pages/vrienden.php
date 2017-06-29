<?php
    $out = '';
    $i = 1;
    $conn = new mysqli('localhost', 'root', 'root', 'theaterbalkendam');
    $query = 'SELECT * FROM (SELECT * FROM vrienden ORDER BY bedrag DESC) AS test ORDER BY bedrag DESC;';
    $res = $conn->query($query);

    while($row = $res->fetch_assoc()){
        $bedrag = "€ " . $row['bedrag'];
        if (strpos($bedrag, '.') !== false){
            $bedrag = str_replace('.', ',', $bedrag);
        }else{
            $bedrag = $bedrag . ",-";
        }
        if ($row['geslacht'] === 'Man'){
            $vriend = 'Vriend';
        }else{
            $vriend = 'Vriendin';
        }
        $out .= "<div class='vriend$i'>";
        if ($i < 4) {
            if ($i === 1) {
                $out .= "<div class='foto$i'>";
                $out .= "<p class='vriendvan$i'>";
            }else{
                $out .= "<div class='foto2'>";
                $out .= "<p class='vriendvan2'>";
            }
            $out .= "$vriend<br>van";
            $out .= "</p>";
            $out .= "</div>";
            $out .= "<div class='txt$i'>";
            $out .= "<p class='info$i'>";
            $out .= "Nummer $i vriend:<span class='span1'>" . $row['naam'] . "</span><br>";
            $out .= "Bedrag donatie:<span class='span2'> " . $bedrag . "</span><br>";
            $out .= "</p>";
            if ($i === 1) {
                $out .= "<p class='omschrijf$i'>";
                $out .= $row['beschrijving'];
                $out .= "</p>";
            }
            $out .= "</div>";
        }else{
            $out .= $row['naam'];
            $out .= " <span class='span3'>" . $bedrag. "</span>";
        }
        $out .= "</div>";
        $i++;
    }
$conn->close();
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Theater Balkendam</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../Assets/StyleSheets/general.css">
        <link rel="stylesheet" href="../Assets/StyleSheets/vrienden.css">
        <script src="../Assets/JavaScript/general.js" defer></script>
        <style>
/*            Plaats deze style in de css pages aub ~Youri*/
            .span1{
                padding-left: 20em;
            }
            .span2{
                padding-left: 21em;
            }
            .span3{
                padding-left: 5em;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <header class="header">
                <div class="banner">
                    <img class="logo" src="../Img/logo.png" alt="logo">
                </div>
                <nav>
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="seizoen.php">Seizoen 2017/2018</a></li>
                        <li><a href="vrienden.php" class="vrienden">Vrienden van TB</a></li>
                        <li><a href="technisch.php">Technisch</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </header>
            <div class="main">
                <a class="vriendworden" href="word_vriend.php">Wordt ook vriend</a>
                <p class="welkom_text">Hier vindt u alle vrienden van Theater Balkendam</p>
                <br>
                <div class="basis">
                    <p class="welkom_text">Onze huidige vrienden</p>
                    <?php echo $out;?>
                </div>
            </div>
            <footer>© Copyright Theater Balkendam 2017</footer>
        </div>
    </body>
</html>