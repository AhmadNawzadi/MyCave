<?php 
session_start();
require '../request/connect.php'; 
require '../php/header.php';
?>

<!-- THE CONTENT OF  -->
<section class="container">  

    <div class="box">
    <!-- REQUEST 'READ' DATABASE-->
    <?php 
    $req = $db->prepare(" 
    SELECT *
    FROM wine_stock
    WHERE region = 'Southern Rhone / Gigondas'
    ");

    $req->execute();
    
    while ($data = $req->fetch()) 
    { ?>

    <div class="content">
        <div class="imgBox">
            <img src="../assets/img/<?php echo $data['picture']; ?>">                
        </div>  

        <div class="details">
            
            <!-- WINE INFORMATION   -->
            <div class="bottleInfo">
                <h4><?php echo $data['name'];?></h4>
                <h4><?php echo $data['year']; ?></h4>
                <h4><?php echo $data['grapes'];?></h4>    
                <h4><?php echo $data['country'];?></h4>
                <h4><?php echo $data['region'];?></h4> 
            </div>

            <!-- WINE DESCRIPTION -->
            <div class="description">
                <p><?php echo $data['description'];?></p> 
            </div>

            <!-- BUTTONS FOR 'UPDATE' AND 'DELETE'  INCREMENT AND DECREMENT  -->
            <?php if(isset($_SESSION['id'])){ ?>
            <div class="updateDelete">
                <a onclick="deleteData(<?php echo $data['id'];?>)"><i class="fa fa-times"></i></a>
                <a href="php/update.php?id_url=<?php echo $data['id'];?>"><i class="fa fa-pencil"></i></a>

                <div id="add"><i class="fa fa-plus" aria-hidden="true"></i></div>
                <span id="addOne">1</span>
                <div id="subtract"><i class="fa fa-minus" aria-hidden="true"></i></div>
            </div>
            <?php } else {'to be connected';}?>
        </div> 

    </div>

    <?php  } ?>
    </div>

</section>



<?php include '../php/footer.php';?>





