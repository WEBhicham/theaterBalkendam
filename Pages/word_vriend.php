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
                <div class="form__left">
                <form action="" method="post">
                    <div class="form_inputs">
                        <input placeholder="Voornaam" title="Voornaam" name="voornaam" type="text">
                        <input placeholder="t.v." title="tv" name="tv" type="text">
                        <div class="select__style--geslacht">
                            <select title="geslacht" name="gelacht">
                                <option value="man">Man</option>
                                <option value="vrouw">Vrouw</option>
                                <option value="overig">Overig</option>
                            </select>
                        </div>
                        <input placeholder="Achternaam" title="achternaam" name="achternaam" type="text">
                        <input placeholder="Telefoonnummer" title="telefoonnummer" name="telefoonnummer" type="text">
                        <input placeholder="E-mail" title="email" name="email" type="text">
                        <input placeholder="Donatie" title="donatie" name="donatie" type="text">
                        <div class="select__style--betaalmethode">
                            <select title="betaalmethode" name="betaalmethode">
                                <option value="" disabled selected>Kies uw betaalmethode</option>
                                <option value="ideal">Ideal</option>
                                <option value="paypal">Paypal</option>
                                <option value="mastercard">Mastercard</option>
                                <option value="visa">VISA</option>
                            </select>
                        </div>
                        <input type="submit">
                    </div>
                </div>
                    <div class="form__right">
                        <textarea title=""  name="" id="" cols="30" rows="10"></textarea>
                    </div>
                </form>
            </div>

            <footer>© Copyright Theater Balkendam 2017</footer>
        </div>
    </body>
</html>
