<?php
    $id = $_GET["id"];
    $dir = "../Img/";
    $conn = new mysqli('localhost', 'root', 'root', 'theaterbalkendam');
    $query = "SELECT * FROM seizoen_2017_2018 WHERE idseizoen_2017_2018 = '$id';";

    $res = $conn->query($query);
    while($row = $res->fetch_assoc()) {
        $out .= "<img class=\"img\" src=\"" . $dir . $row['img'] . "\">";
    }
$conn->close();
?>
<!doctype html>
<html lang=”nl”>
<head>
    <title>CHECK</title>
    <meta charset=”utf-8”>
    <link rel="stylesheet" href="../Assets/StyleSheets/general.css">
    <link rel="stylesheet" href="../Assets/StyleSheets/reseveer.css">
</head>
<body>
<div class="container">
    <header class="header">
        <div class="banner">
            <img class="logo" src="../Img/logo.png" alt="logo">
        </div>
        <nav>
            <ul>
                <li><a href="../index.php" class="home">Home</a></li>
                <li><a href="seizoen.php">Seizoen 2017/2018</a></li>
                <li><a href="vrienden.php">Vrienden van TB</a></li>
                <li><a href="technisch.php">Technisch</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="main">
        <?php
            echo $out;
        ?>
        <p class="p">
            Vestibulum aliquet ligula mi, eget scelerisque ex suscipit a. Vivamus sed dolor eu massa blandit mollis. Vivamus tristique efficitur urna, eu tincidunt tellus dapibus id. Quisque placerat, augue ut convallis facilisis, elit arcu ultricies nisi, vitae iaculis sapien quam in elit. Nulla lacinia eu ante id consectetur. Morbi rhoncus cursus nunc sollicitudin fermentum. Maecenas rutrum risus eu dignissim malesuada. Phasellus hendrerit turpis lacus, ac auctor justo sagittis eu.

            Proin tempor et metus ut tincidunt. Nam iaculis gravida massa in sagittis. Duis lectus felis, molestie nec risus ut, suscipit suscipit libero. Maecenas varius justo non consectetur sodales. Integer in consectetur ipsum. Praesent nibh tortor, consequat sed accumsan a, faucibus vitae orci. In ex leo, finibus sit amet pulvinar at, malesuada ac lorem. Integer vitae velit libero. Vivamus suscipit eros a orci mattis, condimentum interdum ipsum consectetur. Phasellus vitae magna consequat, congue tortor vitae, auctor risus. Quisque ut ante elementum lorem pulvinar vehicula eu sodales diam. Aenean gravida nulla tellus, non molestie arcu pretium at. Phasellus in consequat sapien. Nunc cursus,
        </p>
        <a href="../index.php">Reseveer nu!</a>
    </div>

    <footer class="footer">© Copyright Theater Balkendam 2017</footer>
</div>
</body>
</html>
