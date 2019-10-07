<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Userdata</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

    <?php require '../templates/header.php'; ?>

    <form action="_self" method="post">
        <fieldset>
            <legend>Personliga uppgifter</legend>
            <label for="firstname">Förnamn:</label><br>
            <input type="text" name="firstname"><br>
            <label for="lastname">Efternamn:</label><br>
            <input type="text" name="lastname"><br>
            <label for="email">E-post:</label><br>
            <input type="email" name="email"><br>
            <label for="website">Websajt:</label><br>
            <input type="url" name="website"><br>
            <label for="comment">Kommentar:</label><br>
            <textarea name="comment" rows="5" cols="40"></textarea><br>
            <label for="gender">Kön:</label>
            <input type="radio" name="gender" value="female">Kvinna
            <input type="radio" name="gender" value="male">Man
            <input type="radio" name="gender" value="other">Annat<br>
            <input type="submit" value="Registrera">

        </fieldset>

    </form>
    

    <?php require '../templates/footer.php'; ?>

</body>
</html>

