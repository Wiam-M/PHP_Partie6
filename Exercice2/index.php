<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Créez un formulaire avec les champs "nom" et "prénom". À l'envoie du formulaire sur une autre page, Affichez les informations saisies.</h1>
    <form action="index2.php" method="post">
    <div>
        <label for="lname">Nom :</label>
        <input type="text" id="lname" name="user_lname" >
    </div>
    <div>
        <label for="fname">Prenom :</label>
        <input type="text" id="fname" name="user_fname">
    </div>
    <button type="submit">Submit</button>
</form>
</body>
</html>