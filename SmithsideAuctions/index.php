<?php
/**
 * index.php
 * 
 * Main content
 * 
 * @version 1.2 2018-04-16
 * @package Smithside Auction KD
 * @copyright (c) 2018, Tung Pham
 * @license GNU General Public Source
 * @since release 1.0
 */
require_once 'includes/init.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Home | Smithside Auctions 2018</title>
        <link href="css/main.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div id="container">

            <div id="header">
                <a href="index.php">
                    <img src="images/banner.jpg"  alt="Smithside Auctions" />
                </a> 
            </div><!-- end header -->

            <div id="navigation">
                <h3 class="element-invisible">Menu</h3>
                <ul class="mainnav">
                    <li><a href="index.php?content=categories">Lot Categories</a></li>
                    <li><a href="index.php?content=about">About Us</a></li>
                    <li><a href="index.php?content=home">Home</a></li>
                </ul>
                <div class="clearfloat"></div>
            </div><!-- end navigation -->

            <div class="message">
            </div><!-- end message -->	

            <div class="sidebar">
                <?php
                /*
                  if (isset($_GET['content'])) :
                  switch ($_GET['content']):
                  case 'gents':
                  case 'sporting':
                  case 'women':
                  include 'contents/catnav.php';
                  endswitch;
                  endif;
                 * */
                loadContent('sidebar', '');
                ?>
            </div><!-- end sidebar -->



            <div class="content">
                <?php
                loadContent('content', 'home');
                ?>

            </div><!-- end content -->

            <div class="clearfloat"></div>

            <div id="footer">
                <p>&copy; <?php echo date('Y') ?> Smithside Auctions</p>
            </div><!-- end footer -->

        </div><!-- end container -->
    </body>
</html>
