<?php 
session_start();
include '../request/connect.php';

$req = $db->prepare('
    DELETE FROM wine_stock
    WHERE id=?
');

$req->execute(array($_GET['id_url']));

header("Location: ../index.php?data deleted successfully!");


?>



