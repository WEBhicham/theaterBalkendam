<?php
//    if(isset($_POST["email"], $_POST["naam"])){
//        $to = "hicham.elallouchi@ictmbo.nl";
//        $from = $_POST["email"];
//
//        $first_nameto = $_POST["naam"];
//        $first_name = "Naam: " . $_POST["naam"];
//
//        $subject = "Contact Bericht - Theater Balkendam";
//        $subject2 = "Kopie van uw contact verzoek - Theater Balkendam";
//
//        $message = "U heeft een contact verzoek van $first_nameto.\n\nE-mailadres van $first_nameto: $from\n\nVraag/Bericht:\n\n" . $_POST["bericht"];
//        $message2 = "Beste $first_nameto,\n\nHier is het kopie van u contact verzoek.\n\nVraag/Bericht:\n\n" . $_POST["bericht"] . "\n\nU verzoek wordt z.s.m. behandeld,";
//
//        $headers = "Afzender: $from";
//        $headers2 = "Afzender: $to";
//
//        mail($to,$subject,$message,$headers);
//        mail($from,$subject2,$message2,$headers2);
//    }


    // PAS OP!!!
    // Youri heeft hier zijn code geschreven
    // YOU HAVE BEEN WARNED

    $err = '';

    if ($_SERVER["REQUEST_METHOD"] === "POST"){

        $voornaam = $_POST['voornaam'];
        $tussenvoegsel = $_POST['tv']. ' ';
        $achternaam = $_POST['achternaam'];
        $email = $_POST['email'];
        $telnum = $_POST['telnum'];
        $donatie = $_POST['donatie'];
        $betaalmethode = $_POST['betaalmethode'];
        $geslacht = $_POST['geslacht'];
        $beschrijving = $_POST['beschrijving'];

        $array = array('voornaam' => $voornaam, 'tussenvoegesel' => $tussenvoegsel,'achternaam' => $achternaam,'donatie' => $donatie, 'email' => $email,'telnum' => $telnum, 'betaalmethode' => $betaalmethode,'beschrijving' => $beschrijving,'geslacht' => $geslacht);

        if(isset($voornaam, $tussenvoegsel, $achternaam, $email, $telnum, $donatie, $betaalmethode, $geslacht, $beschrijving)){
            if(empty($voornaam) || empty($achternaam) || empty($email) || empty($telnum) || empty($donatie) || empty($betaalmethode) || empty($geslacht)){
                $err .= 'U heeft niet alle verplichte velden ingevuld.<br>';
            }
            $conn = new mysqli("localhost", "root", "root", "theaterbalkendam");
            foreach ($array as $k => $v){
                $$k = $conn->real_escape_string($v);
                if (strpos($v, '<') !== false || strpos($v, '>') !== false){
                    $err .= 'U heeft xss geprobeerd, mag niet jochie.<br>';
                }
            }
            if($err === ''){
                $query = "INSERT INTO vrienden (naam, email, telnum, geslacht, bedrag, betaalmethode, beschrijving)
              VALUES ('$voornaam $tussenvoegsel$achternaam', '$email', '$telnum', '$geslacht', '$donatie', '$betaalmethode', '$beschrijving')";

                if ($conn->query($query)) {
                    header('Location:vrienden.php');
                }
                $conn->close();
            }
        } else{
            $err .= 'U heeft met de code gekloot.<br>';
        }
    };



//if ($_SERVER["REQUEST_METHOD"] === "POST") {
//
//    $voornaam = $_POST['voornaam'];
//    $tussenvoegsel = $_POST['tv'] . ' ';
//    $achternaam = $_POST['achternaam'];
//    $email = $_POST['email'];
//    $telnum = $_POST['telnum'];
//    $donatie = $_POST['donatie'];
//    $betaalmethode = $_POST['betaalmethode'];
//    $geslacht = $_POST['geslacht'];
//    $beschrijving = $_POST['geslacht'];
//
//    $conn = new mysqli("localhost", "root", "root", "theaterbalkendam");
//
//    $query = "INSERT INTO vrienden (naam, email, telnum, geslacht, bedrag, betaalmethode, beschrijving)
//              VALUES ('$voornaam $tussenvoegsel$achternaam', '$email', '$telnum', '$geslacht', '$donatie', '$betaalmethode', '$beschrijving')";
//
//    $conn->query($query);
//
//    $conn->close();
//
//}
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>CHECK</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../Assets/StyleSheets/general.css">
        <link rel="stylesheet" href="../Assets/StyleSheets/word_vriend.css">
    </head>
    <body>
        <?php echo $err;?>
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
                    <div class="form__left">
                        <div class="form_inputs">
                            <input placeholder="Voornaam" title="Voornaam" name="voornaam" type="text">
                            <input placeholder="t.v." title="tv" name="tv" type="text">
                            <div class="select__style--geslacht">
                                <select title="geslacht" name="geslacht">
                                    <option value="Man">Man</option>
                                    <option value="Vrouw">Vrouw</option>
                                    <option value="Overig">Overig</option>
                                </select>
                            </div>
                            <input placeholder="Achternaam" title="achternaam" name="achternaam" type="text">
                            <input placeholder="Telefoonnummer" title="telefoonnummer" name="telnum" type="text">
                            <input placeholder="E-mail" title="email" name="email" type="text">
                            <input placeholder="Donatie" title="donatie" name="donatie" type="number">
                            <div class="select__style--betaalmethode">
                                <select title="betaalmethode" name="betaalmethode">
                                    <option value="" disabled selected>Kies uw betaalmethode</option>
                                    <option value="Ideal">Ideal</option>
                                    <option value="Paypal">Paypal</option>
                                    <option value="Mastercard">Mastercard</option>
                                    <option value="VISA">VISA</option>
                                </select>
                            </div>
                            <input type="submit">
                        </div>
                    </div>
                    <div class="form__right">
                        <textarea title=""  name="beschrijving" id="" cols="30" rows="10"></textarea>
                    </div>
                </form>
            </div>
            <footer>© Copyright Theater Balkendam 2017</footer>
        </div>
    </body>
</html>
