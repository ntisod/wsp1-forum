<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./forum.css">
    <title>Stränghantering</title>
</head>
<body>

    <?php require '../templates/header.php'; ?>

    <h1>Formulär</h1>

   <form action="welcome.php" method = "post">
   Namn: <input type = "text" name="name">
   <p>Lösenord: <input type = "password" name="e-mail"><br /></p>
   <input type = "submit">

   </form>

   <?php require '../templates/footer.php'; ?>

</body>
</html>

