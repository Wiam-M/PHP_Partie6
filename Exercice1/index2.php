<?php
if(isset($_POST['user_lname']) && isset($_POST['user_fname'])){
    echo htmlspecialchars('l\'utilisateur à envoyé les informations suivante : '. ' Nom : ' . $_POST['user_lname']. ' '. ' Prénom : ' .$_POST['user_fname']);
}

?>