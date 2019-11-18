<?php
session_start();
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inloggning</title>
</head>
<body>

<?php
    //OBS! Väldigt osäker sida. Inga kontroller här. De till att ha sådana i dina riktiga sidor.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Ange sessionsvariabel
        $_SESSION["user"]=$_POST["user"];
        //Skicka till session.php
        header("Location: session.php");
    }else{
        //Visa inloggningsformulär
        echo <<<HTML
            <form action="{$_SERVER['PHP_SELF']}" method="post">
                <label for="user">Ange ditt användarnamn:</label>
                <input type="text" name="user">
                <input type="submit" value="Logga in">
            </form>
HTML;
    }
?>

</body>
</html>