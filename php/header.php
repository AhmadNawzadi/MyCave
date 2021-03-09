<?php
define('SITE_URL','http://localhost/project-cave/'); 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>MyCave</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo SITE_URL . 'assets/img/wineglass.png';?>">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo SITE_URL . 'assets/css/style.min.css'; ?>">
</head>

<body>
    <header>

        <div class="navbar">
            <!-- logo image -->
            <div class="logo">
                <a href="<?php echo SITE_URL . 'index.php'?>"><img src="<?php echo SITE_URL . 'assets/img/logos/mycaveLogo.png';?>"></a>
            </div>
            

            <!-- burger menu (mobile) -->
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
            <i class="fa fa-bars"></i></label>

            <!-- menu catagories -->
            <div class="category"> 
                <div class="category_content">
                    <div class="dropdown">
                        <p onclick="show_hide1()" class="dropdown_menu">Country <i class="fa fa-caret-down"></i></p>

                        <div style="display: none;" id="drop-content1">
                            <a href="<?php echo SITE_URL . 'category/argentina.php';?>">Argentina</a>
                            <a href="<?php echo SITE_URL . 'category/france.php';?>">France</a>
                            <a href="<?php echo SITE_URL . 'category/italy.php';?>">Italy</a>
                            <a href="<?php echo SITE_URL . 'category/spain.php';?>">Spain</a>
                            <a href="<?php echo SITE_URL . 'category/usa.php';?>">USA</a>
                        </div>
                    </div>
                    
                    <div class="dropdown">
                        <p onclick="show_hide2()" class="dropdown_menu">Region <i class="fa fa-caret-down"></i></p>
                    
                        <div style="display: none;" id="drop-content2">
                            <a href="<?php echo SITE_URL . 'category/bordeaux.php';?>">Bordeaux</a>
                            <a href="<?php echo SITE_URL . 'category/burgundy.php';?>">Burgundy</a>
                            <a href="<?php echo SITE_URL . 'category/california.php';?>">California</a>
                            <a href="<?php echo SITE_URL . 'category/calif.php';?>">California Central Coast</a>
                            <a href="<?php echo SITE_URL . 'category/mendoza.php';?>">Mendoza</a>
                            <a href="<?php echo SITE_URL . 'category/oregon.php';?>">Oregon</a>
                            <a href="<?php echo SITE_URL . 'category/rioja.php';?>">Rioja</a>
                            <a href="<?php echo SITE_URL . 'category/rhone.php';?>">Southern Rhone/Gigondas</a>
                            <a href="<?php echo SITE_URL . 'category/tuscany.php';?>">Tuscany</a>
                            <a href="<?php echo SITE_URL . 'category/washington.php';?>">Washington</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <p onclick="show_hide3()" class="dropdown_menu">Grapes <i class="fa fa-caret-down"></i></p>
                    
                        <div style="display: none;" id="drop-content3">
                            <a href="<?php echo SITE_URL . 'category/chardonnay.php';?>">Chardonnay</a>
                            <a href="<?php echo SITE_URL . 'category/Grenache.php';?>">Grenache</a>
                            <a href="<?php echo SITE_URL . 'category/merlot.php';?>">Merlot</a>
                            <a href="<?php echo SITE_URL . 'category/pinotgris.php';?>">Pinot Gris</a>
                            <a href="<?php echo SITE_URL . 'category/pinotnoir.php';?>">Pinot Noir</a>
                            <a href="<?php echo SITE_URL . 'category/sangiovese.php';?>">Sangiovese Merlot</a>
                            <a href="<?php echo SITE_URL . 'category/sauvignon.php';?>">Sauvignon Blanc</a>
                            <a href="<?php echo SITE_URL . 'category/syrah.php';?>">Syrah</a>
                            <a href="<?php echo SITE_URL . 'category/tempranillo.php';?>">Tempranillo</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <p onclick="show_hide4()" class="dropdown_menu">Year <i class="fa fa-caret-down"></i></p>
                    
                        <div style="display: none;" id="drop-content4">
                            <a href="<?php echo SITE_URL . 'category/eleven.php';?>">2011</a>
                            <a href="<?php echo SITE_URL . 'category/ten.php';?>">2010</a>
                            <a href="<?php echo SITE_URL . 'category/nine.php';?>">2009</a>
                            <a href="<?php echo SITE_URL . 'category/seven.php';?>">2007</a>
                            <a href="<?php echo SITE_URL . 'category/six.php';?>">2006</a>
                            <a href="<?php echo SITE_URL . 'category/five.php';?>">2005</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- connect and disconnect button -->
            <div>
                <?php 

                if(isset($_SESSION["id"])) : ?>
                <button class="disconnect"><a href="<?php echo SITE_URL . "php/disconnect.php"; ?>">DISCONNECT</a></button>

                <?php 
                else : ?> 
                <button class="connectButton">CONNECT</button>

                <?php 
                endif; ?>
                
            </div>
        </div>
    </header>


    



    