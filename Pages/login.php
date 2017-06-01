<?php
    $gebruikersnaam = $wachtwoord = $err = '';

//    $logout = $_GET['logout'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $gebruikersnaam = $_POST['gnaam'];
        $wachtwoord = $_POST['ww'];

        if (isset($gebruikersnaam, $wachtwoord) && !empty($gebruikersnaam) && !empty($wachtwoord)) {
            $conn = mysqli_connect('localhost', 'root', 'root', 'theater_balkendam');
            $query = 'SELECT * FROM admingegevens;';
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)){
                    if($row['username'] === $gebruikersnaam && $row['password'] === $wachtwoord){
                        session_start();
                        $_SESSION['adminname'] = $gebruikersnaam;
//                        echo "Welkom $gebruikersnaam";
                        header("Location: admin.php?gnaam=$gebruikersnaam&");
                        break;
                    } else{
                        $err .= 'Uw gebruikersnaam en/of wachtwoord klopt niet.<br>';
                    }
            }

            mysqli_close($conn);
        } else{
            $err .= 'Uw gebruikersnaam en/of wachtwoord klopt niet.<br>';
        }
    } else if(isset($logout) && !empty($logout)){
        if($logout){
            session_start();
            session_destroy();
//            $out = 'U bent nu uitgelogd!';
        }
    }
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Admin Login</title>
        <meta charset="utf-8">
    </head>
    <body>
        <div id="form">
            <form action="" class="inputform" method="post" enctype="multipart/form-data">
                <label for="gebruikersnaam">Gebruikersnaam:</label>
                <input id="gebruikersnaam" type="text" name="gnaam" value="<?php echo $gebruikersnaam;?>">
                <label for="wachtwoord">Wachtwoord:</label>
                <input id="wachtwoord" type="password" name="ww">
                <input id="verzenden" type="submit" name="verzenden" value="Inloggen!">
            </form>
        </div>
        <script>
            document.getElementById('verzenden').addEventListener('click', clear);
            function clear() {
                let query = window.location.search.substring(1);
                if(query.length) {
                    if(window.history != undefined && window.history.pushState != undefined) {
                        window.history.pushState({}, document.title, window.location.pathname);
                    }
                }
                window.location.reload();
            }
        </script>
    </body>
</html>
