<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 6</h1>
    <p>Créez un formulaire avec les champs "civilité", "nom" et "prénom" ainsi qu'un bouton permettant de sélectionner un fichier à envoyer. À l'envoie du formulaire sur la même page, affichez les informations saisies. Les champs doivent être renseignés. Vérifiez la saisie. Empêchez l'affichage de balises html. Le fichier envoyé doit être un pdf.</p>
    <form action="index.php" method="post"  enctype="multipart/form-data">
            <select name="civility" id="civility">
                <option value="Mme">Mme</option>
                <option value="Mr">Mr</option>
                <option value="Autre">Autre</option>
            </select>
        <label>Nom</label>
         <input type="text" name="lastName" placeholder="Votre nom">
        <label>Prénom</label>
        <input type="text" name="firstName" placeholder="Votre prénom">
        <input type="file" name="file">
        <input type="submit" name="valider" value="Valider"/>
    </form>
    <?php
    $formInput = "/^[a-zA-Z\s\.\-]+[A-Za-z\.\-]+[^0-9]$/";
    $civility = $_POST["civility"];
    $lname = htmlspecialchars($_POST["lastName"]);
    $lname = ucwords($lname); // permet de convertir le premier caractere en majuscule uc: uppercasewords
    $fname = htmlspecialchars($_POST["firstName"]);
    $fname = ucwords($fname);
    //recupere le fichier avec la $_FILES
    $file = $_FILES["file"];
    $fileName = $file['name'];
    ///////////////////////////// Array solution ///////////////////////////////////////////////////////////////////
    // $desiredExtension = array('pdf');
    // $extension_upload = pathinfo($fileName,PATHINFO_EXTENSION);
    //     if (isset($lname)&& isset($fname)&& isset($file)){
    //         if (preg_match($formInput,$lname) && preg_match($formInput,$fname) && in_array($extension_upload, $desiredExtension)){
    //             echo  'Bonjour  '. $_POST["civility"] . ' ' . $lname . ' ' .$fname . ' '. 'le fichier est : ' . $fileName;
    //         }else{
    //             echo "Veuillez remplir les champs ";
    //         }
    //     }

    /////////////////////////////with Comparison Operators solution ///////////////////////////////////////////////////////////////////

    //The pathinfo() function returns information about a file path. 
    // un echo $pathInfofile seul est un tableau , $pathInfofile['extension'] = on accede a l extension, ['filename'], ['BASENAME'], ['dirname']
    $pathInfofile = pathinfo($fileName);
    $extension_upload = $pathInfofile['extension'];
    if (isset($lname)&& isset($fname)&& isset($file)){
                if (preg_match($formInput,$lname) && preg_match($formInput,$fname) && ($extension_upload === 'pdf')){
                    echo  'Bonjour  '. $_POST["civility"] . ' ' . $lname . ' ' .$fname . ' '. 'le fichier est : ' . $fileName;
                }else{
                    echo "Veuillez remplir les champs ";
                }
    }
    
        
    ?>
</body>
</html>