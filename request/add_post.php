 <?php 
session_start();
include 'connect.php';

    $name         = strip_tags($_POST['name']);
    $year         = strip_tags($_POST['year']); 
    $grapes       = strip_tags($_POST['grapes']); 
    $country      = strip_tags($_POST['country']);
    $region       = strip_tags($_POST['region']);
    $description  = strip_tags($_POST['description']);
    $file         = $_FILES['picture'];

if($file['size'] <= 1000000):

    $dbname         = uniqid() . '_' . $file['name'];
    $upload_name    = '../assets/img/' . $dbname;
    $move_result = move_uploaded_file($file['tmp_name'], $upload_name);

    if($move_result):

        $req = $db->prepare("
            INSERT IGNORE INTO wine_stock (name, year, grapes, country, region, description, picture)
            VALUES (:name, :year, :grapes, :country, :region, :description, :picture) 
        ");

        $success = $req->execute(array(
            'name'        => $name,
            'year'        => intval($year),
            'grapes'      => $grapes,
            'country'     => $country,
            'region'      => $region,
            'description' => $description,
            'picture'     => $dbname
        ));

    else: 
        echo 'Error in uploading the file';
    endif;

else: 
    echo 'the size of the file is not suitable';
endif;
         
header('Location:../index.php?msg=data added successfully');

?>
