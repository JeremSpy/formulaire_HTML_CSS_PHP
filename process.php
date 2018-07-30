<?php

    header('Content-Type: text/html; charset=utf-8');

    $user_name = ($_POST['user_name']);
    
    echo "Merci " . ucwords($user_name);

    $user_msg = ($_POST['user_message']);

    $user_content = "----- Nouvelle entrée d'utilisateur -----" . "\r\r" .
     "[Il s'agit de] : " . $user_name . "\r\r" .
     "[Qui me dit] : " . $user_msg . "\r\r" .
     "----- Fin de l'entrée -----" . "\r\r\r\r\r";

    $file = fopen("usrmsg.txt", "a+");

    fputs($file, $user_content);

    fclose($file);

?>