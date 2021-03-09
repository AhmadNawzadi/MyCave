<?php
session_start(); 
include '../request/connect.php'; 
include 'header.php'; 


$name        = isset($_GET['name']) ? $_GET['name'] : ''; 
$year        = isset($_GET['year']) ? $_GET['year'] : ''; 
$grapes      = isset($_GET['grapes']) ? $_GET['grapes'] : ''; 
$country     = isset($_GET['country']) ? $_GET['country'] : ''; 
$region      = isset($_GET['region']) ? $_GET['region'] : ''; 
$description = isset($_GET['description']) ? $_GET['description'] : ''; 
$picture     = isset($_FILES['picture']) ? $_FILES['picture'] : ''; 
?>


<!-- FORM FOR ADDING NEW BOTTLE  -->
<form action="../request/add_post.php" method="POST" class="addinputs" enctype="multipart/form-data">
<div class="body">
    <div class="container1">
        <h2>Add New <span class="black">Bottle</span></h2>
        <div class="row100">

            <div class="col">
                <div class="inputBox">
                    <input type="text" name="name" required="required">
                    <span class="text">Name</span>
                    <span class="line"></span>
                </div>
            </div>
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="year" required="required">
                    <span class="text">Year</span>
                    <span class="line"></span>
                </div>
            </div>

        </div>

        <div class="row100">

            <div class="col">
                <div class="inputBox">
                    <input type="text" name="grapes" required="required">
                    <span class="text">Grapes</span>
                    <span class="line"></span>
                </div>
            </div>
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="country" required="required">
                    <span class="text">Country</span>
                    <span class="line"></span>
                </div>
            </div>

        </div>

        <div class="row100">

            <div class="col">
                <div class="inputBox">
                    <input type="text" name="region" required="required">
                    <span class="text">Region</span>
                    <span class="line"></span>
                </div>
            </div>
            <div class="col">
                <div class="inputBox">
                    <input type="file" name="picture" required="required">
                    <span class="text"></span>
                    <span class="line"></span>
                </div>
            </div>

        </div>

        <div class="row100">
            <div class="col">
                <div class="inputBox textarea">
                    <textarea type="text" name="description" required="required"></textarea>
                    <span class="text">Description</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>

        <div class="row100">
            <div class="col">
                <input type="submit" value="Send">
            </div>
        </div>

    </div>
</div>
</form>
<!-- END OF FORM FOR ADDING NEW BOTTLE  -->

<!-- PHP POUR ENVOYER BACKGROUND IMAGE -->

<?php $url = 'cave.jpg'; ?>

<style type="text/css">
    body { 
        background-image: url(<?php echo SITE_URL . 'assets/img/cave.jpg' ?>);
        background-size: cover;
        background-repeat: no-repeat;
        overflow: hidden;
     }
</style>

<?php include 'footer.php'; ?>

