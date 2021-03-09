<?php 
session_start();
include '../request/connect.php';
include 'header.php';

// REQUEST FOR UPDATING BOTTLE DETAILS 
$req = $db->prepare('
SELECT name, year, grapes, country, region, description, picture
FROM wine_stock
WHERE id=?
');

$req->execute(array($_GET['id_url']));
$data = $req->fetch();
?>

<!-- UPDATE FORM-->
<div class="banner">
        <video autoplay muted loop>
            <source src="<?php echo SITE_URL . 'assets/img/vin.mp4';?>" type="video/mp4">
        </video>
    </div>

<form action="../request/update_post.php?id_url=<?php echo $_GET['id_url'];?>" method="POST" enctype="multipart/form-data">
    <div class="boddy">
        
    <div class="container2">
    <h2>Update Data</h2>

        <div class="row100">
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="name" value="<?php echo $data['name']; ?>">
                    <span class="text">Name</span>
                    <span class="line"></span>
                </div>
            </div>
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="year" value="<?php echo $data['year']; ?>">
                    <span class="text">Year</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>

        <div class="row100">
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="grapes" value="<?php echo $data['grapes']; ?>">
                    <span class="text">Grapes</span>
                    <span class="line"></span>
                </div>
            </div>
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="country" value="<?php echo $data['country']; ?>">
                    <span class="text">Country</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        
        <div class="row100">
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="region" value="<?php echo $data['region']; ?>">
                    <span class="text">Region</span>
                    <span class="line"></span>
                </div>
            </div>
            <div class="col">
                <div class="inputBox">
                    <input type="file" name="picture" value="<?php echo $data['picture'];?>">
                    <span class="text">Picture</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>

        <div class="row100">
            <div class="col">
                <div class="inputBox textarea">
                    <textarea type="text" name="description"><?php echo $data['description'];?></textarea>
                    <span class="text">Description</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>

        <input type="hidden" value="<?php echo $data['picture']?>" name="picturetext">

        <div class="row100">
            <div class="col">
                <input type="submit" value="Update">
            </div>
        </div>

    </div>
</div>
</form>


<?php 

if(isset($_GET['msg'])) {
    echo $_GET['msg'];
} 

include 'footer.php'; 
?>



