<?php
$rejex = '/^[A-Z]{1}[a-z]+$/';
//preg_match fonction pour rejex
if(preg_match($rejex, $_POST['user_lname'])&& preg_match($rejex, $_POST['user_fname'])){
    echo 'Bonjour '. ' '. $_POST['user_lname']. ' '. $_POST['user_fname'];
}
else{
    echo "Veuillez remplir les champs correctement";
 }
// if( !empty($_POST['user_lname']) && !empty($_POST['user_fname']) && !is_numeric($_POST['user_lname']) && !is_numeric($_POST['user_fname']) ){
//     echo htmlspecialchars('l\'utilisateur à envoyé les informations suivante : '. ' Nom : ' . $_POST['user_lname']. ' '. ' Prénom : ' .$_POST['user_fname']);
// }else{
//     echo "Veuillez remplir les champs correctement";
// }

?>


