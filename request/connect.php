<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=project-cave;charset=utf8','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exeption $e) {
    die('Erreur : '.$e->getMessage());
}

?>