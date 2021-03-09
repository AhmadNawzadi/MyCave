<?php 
session_start();
require 'request/connect.php'; 
require 'php/header.php';

if(isset($_SESSION["username"]))
{
   echo '<h4 class="welcome">Welcome '  . $_SESSION["username"] . '</h4>';
} 

else 
{?>
    <h4 class="welcome">Welcome...</h4>
<?php } ?>

<!-- THE CONTENT OF INDEX.PHP -->
<section class="container">  

    <div class="box">
    <!-- REQUEST 'READ' DATABASE-->
    <?php 
    $req = $db->prepare(" 
    SELECT id, name, year, grapes, country, region, description, picture
    FROM wine_stock
    ");

    $req->execute();
    
    while ($data = $req->fetch()) { ?>

        <div class="content">
            <div class="imgBox">
                <img src="assets/img/<?php echo $data['picture']; ?>">                
            </div>  

            <div class="details">
                
                <!-- WINE INFORMATION   -->
                <div class="bottleInfo">
                    <h4><?php echo htmlspecialchars($data['name']); ?></h4>
                    <h4><?php echo htmlspecialchars($data['year']); ?></h4>
                    <h4><?php echo htmlspecialchars($data['grapes']); ?></h4>    
                    <h4><?php echo htmlspecialchars($data['country']); ?></h4>
                    <h4><?php echo htmlspecialchars($data['region']); ?></h4> 
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

                    <div id="add"><i class="fa fa-plus"></i></div>
                    <span id="addOne">1</span>
                    <div id="subtract"><i class="fa fa-minus"></i></div>

                </div>
                <?php } else {'to be connected';}?>

            </div> 
        </div>

        <?php }?>
    </div>

</section>

<!-- LOGIN FORM -->

<div class="loginBox">
    <img src="<?php echo SITE_URL .'assets/img/user.jpg';?>" class="loginImage">
    <h2>Log In Here</h2>

    <form action="<?php echo SITE_URL .'request/login_post.php';?>" method="POST">

        <p>Username</p>
        <input type="text" name="username" placeholder="Enter Your Username">
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter Your Password">
        <input type="submit" name="login" value="Sign In">
        
        <a href="#">Forget Password</a>

    </form>
</div>

<?php include 'php/footer.php';?>





