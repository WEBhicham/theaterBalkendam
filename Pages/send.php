<?php
    if(isset($_POST["email"], $_POST["naam"])){
        $to = "hicham.elallouchi@ictmbo.nl";
        $from = $_POST["email"];

        $first_nameto = $_POST["naam"];
        $first_name = "Naam: " . $_POST["naam"];

        $subject = "Contact Bericht - Theater Balkendam";
        $subject2 = "Kopie van u contact verzoek - Theater Balkendam";

        $message = "U heeft een contact verzoek van $first_nameto.\n\nE-mailadres van $first_nameto: $from\n\nVraag/Bericht:\n\n" . $_POST["bericht"];
        $message2 = "Beste $first_nameto,\n\nHier is het kopie van u contact verzoek.\n\nVraag/Bericht:\n\n" . $_POST["bericht"] . "\n\nU verzoek wordt z.s.m. behandeld,";

        $headers = "Afzender: $from";
        $headers2 = "Afzender: $to";

        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2);
        }
?>

<!doctype html>
<html lang=”nl”>
    <head>
        <title>CHECK</title>
        <meta charset=”utf-8”>
        <link rel="stylesheet" href="../Assets/StyleSheets/general.css">
        <link rel="stylesheet" href="../Assets/StyleSheets/word_vriend.css">
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
                <form action="" method="post">
                    <input type="text"   name="naam"  placeholder="Naam">
                    <textarea name="bericht" placeholder="Bericht"></textarea>
                    <input type="email"  name="email" placeholder="E-mail">
                    <input type="submit" name="submit" value="verzenden">
                </form>
            </div>
            <footer class="footer">© Copyright Theater Balkendam 2017</footer>
        </div>
    </body>
</html>
