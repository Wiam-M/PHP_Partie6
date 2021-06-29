<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Créez un formulaire avec les champs "civilité", "nom" et "prénom". À l'envoie du formulaire sur une autre page, Affichez les informations saisies. Les champs doivent être renseignés. Vérifiez la saisie. Empêchez l'inclusion de balises html.</h1>
    <form action="index2.php" method="post">
    <div>
        <select name="user_civility">
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
        </select>
        <label for="lname">Nom :</label>
        <input type="text" id="lname" name="user_lname" >
        <label for="fname">Prenom :</label>
        <input type="text" id="fname" name="user_fname">
    </div>
    <button type="submit">Submit</button>





</form>
</body>
</html>