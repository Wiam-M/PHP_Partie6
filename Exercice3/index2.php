<?php


if( !empty($_POST['user_lname']) && !empty($_POST['user_fname']) && !empty($_POST['user_civility']) && !is_numeric($_POST['user_lname']) && !is_numeric($_POST['user_fname'])&& !is_numeric($_POST['user_civility'])  ){
    echo htmlspecialchars('Bonjour  '. '  '. $_POST['user_civility']  . '  ' . $_POST['user_lname']. ' ' .$_POST['user_fname']);
}else{
    echo "Veuillez remplir les champs correctement";
}

?>


