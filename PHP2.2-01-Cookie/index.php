<?php

if (isset($_GET['color'])) {
    $selectedColor = $_GET['color'];
    setcookie('backgroundColor', $selectedColor, time() + 365*24*3600);
}
else {
    header('Location: / ');
    exit();
}


if (isset($_GET['delete'])) {
    setcookie('backgroundColor'); 
    unset($_COOKIE['backgroundColor']);
}

//BONUS CHANGEMENT DE COULEUR DE TEXTE PAR RAPPORT AU THEME COULEUR


if (select)

include "index.phtml";

?>