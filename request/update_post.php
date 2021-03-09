<?php 

session_start();
include 'connect.php';

$name         = trim(strip_tags($_POST['name']));
$year         = trim(strip_tags($_POST['year'])); 
$grapes       = trim(strip_tags($_POST['grapes'])); 
$country      = trim(strip_tags($_POST['country']));
$region       = trim(strip_tags($_POST['region']);
$description  = trim(strip_tags($_POST['description']));
$picture      = trim(strip_tags($_POST['picturetext']));
$file         = $_FILES['picture'];

if($file['size'] <= 1000000):

    $dbname         = uniqid() . '_' . $file['name'];
    $upload_name    = '../assets/img/' . $dbname;
    $move_result    = move_uploaded_file($file['tmp_name'], $upload_name);

    if($move_result):

    $req = $db->prepare('
        UPDATE wine_stock 
        SET name = :name, year = :year, grapes = :grapes, country = :country, region = :region, description = :description, picture = :picture
        WHERE id = :id
    ');

    $success = $req->execute(array(
        'name'        => $name,
        'year'        => intval($year),
        'grapes'      => $grapes,
        'country'     => $country,
        'region'      => $region,
        'description' => $description,
        'picture'     => $dbname,
        'id'          => $_GET['id_url']  
    ));

    else: 
        $req = $db->prepare('
        UPDATE wine_stock 
        SET name = :name, year = :year, grapes = :grapes, country = :country, region = :region, description = :description, picture = :picture
        WHERE id = :id
    ');

    $success = $req->execute(array(
        'name'        => $name,
        'year'        => intval($year),
        'grapes'      => $grapes,
        'country'     => $country,
        'region'      => $region,
        'description' => $description,
        'picture'     => $picture,
        'id'          => $_GET['id_url']  
    ));
    endif;

else: 
    echo 'the size of the picture is not sutable';
endif;


header("Location: ../index.php?info updated!");
   
?>