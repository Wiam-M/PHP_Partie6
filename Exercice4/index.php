<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        text-align: center;
        background-color: gray;
    }

    form{
        display: flex;
        flex-direction: column;
        width: 40%;
        margin: 3% auto;
       
        }
        button{
            width: 10vw;
            margin: 3% auto;
        }
  
    </style>
</head>
<body>
    <h1>Exercice 4</h1>
    <p>Créez un formulaire avec les champs "civilité", "nom" et "prénom". À l'envoie du formulaire sur la même page, Affichez les informations saisies. Les champs doivent être renseignés. Vérifiez la saisie. Empêchez l'affichage de balises html.</p>
    <?php
    $formInput = "/^[A-Z\.\-]+[A-Za-z\.\-]+[^0-9]$/";
    if (empty($_POST['lastName']) && empty($_POST['firstName'])) {
        ?>
        <form action="index.php" method="post">
            <select name="civility" id="civility">
                <option value="Mme">Mme</option>
                <option value="Mr">Mr</option>
                <option value="Autre">Autre</option>
            </select>
        <label>Nom</label>
         <input type="text" name="lastName" placeholder="Votre nom">
        <label>Prénom</label>
        <input type="text" name="firstName" placeholder="Votre prénom">
        <input type="submit" name="valider" value="Valider"/>
    </form>
    <?php
    }elseif(isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['civility'])) {
        $Civility =  $_POST["civility"];
        $LastName = htmlspecialchars($_POST["lastName"]);
        $FirstName = htmlspecialchars($_POST["firstName"]);
        if (preg_match($formInput,$LastName) && preg_match($formInput, $FirstName)) {
            echo 'Bonjour  '. $Civility . ' ' . $LastName . ' ' .$FirstName;
        }else{
            echo 'Veuillez remplir les champs correctement';
        }
    }
    ?>
</body>
</html>