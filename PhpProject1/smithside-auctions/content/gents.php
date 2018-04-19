<?php
/**
 * gents.php
 * content for the about page
 * @version 1.2 2018-04-16
 * @package Smith Side Auction
 * @copyright (c) 2018, Tung Pham IPD12
 * @license GNU Generl Public License
 * @since Release version 1.0
 */

// get the lot information
$lots = array();
$lots[0]["lot_number"] = "1";
$lots[0]["name"] = "Naval Officer's Formal Tailcoat, 1840s";
$lots[0]["image"] = "naval-19-173.jpg";
$lots[0]["description"] = "Black wool broadcloth, double breast front, missing 3 of 18 raised round gold buttons w/ 
        crossed cannon barrels &amp; \"Ordnance Corps\" text, silver sequin &amp; tinsel embroidered emblem 
        on each square cut tail, quilted black silk lining, very good;";
$lots[0]["price"] = 5700.00;

$lots[1]["lot_number"] = "2";
$lots[1]["name"] = "Striped Cotton Tailcoat, America, 1835-1845";
$lots[1]["image"] = "gents-striped-8-26.jpg";
$lots[1]["description"] = "Orange and white pin-striped twill cotton, double breasted, turn down collar, waist seam, 
                self-fabric buttons, inside single button pockets in each tail, (soiled, faded, cuff edges
                frayed) good.";
$lots[1]["price"] = 20700.00;

$lots[2]["lot_number"] = "3";
$lots[2]["name"] = "Black Broadcloth Tailcoat, 1830-1845";
$lots[2]["image"] = "gents-striped-8-26.jpg";
$lots[2]["description"] = "Orange and white pin-striped twill cotton, double breasted, turn down collar, waist seam, 
                self-fabric buttons, inside single button pockets in each tail, (soiled, faded, cuff edges
                frayed) good.";
$lots[2]["price"] = 3450.00;

/*
$lot_number1 = "1";
$image1 = "naval-19-173.jpg";
$name1 = "Naval Officer's Formal Tailcoat, 1840s";
$description1 = "Black wool broadcloth, double breast front, missing 3 of 18 raised round gold buttons w/ 
        crossed cannon barrels &amp; \"Ordnance Corps\" text, silver sequin &amp; tinsel embroidered emblem 
        on each square cut tail, quilted black silk lining, very good;";
$price1 = 5700.00;

$lot_number2 = "2";
$image2 = "gents-striped-8-26.jpg";
$name2 = "Striped Cotton Tailcoat, America, 1835-1845";
$description2 = "Orange and white pin-striped twill cotton, double breasted, turn down collar, waist seam, 
                self-fabric buttons, inside single button pockets in each tail, (soiled, faded, cuff edges
                frayed) good.";
$price2 = 20700.00;

$lot_number3 = "3";
$image3 = "gents-black-8-27.jpg";
$name3 = "Black Broadcloth Tailcoat, 1830-1845";
$description3 = "Fine thin wool broadcloth, double breasted, notched collar, horizontal front and side waist seam,
                slim long sleeves with notched cuffs, curved tails, black silk satin lining quilted in diamond pattern,
                padded and quilted chest, black silk covered buttons, (buttons worn) excellent.";
$price3 = 3450.00;
*/

// counter variable for counting thet line number
$counter = 0;

?>

<h1>Product Category: Gents</h1>

<ul class="ulfancy">

    <li class="row<?php echo $counter++ % 2; ?>">					
        <div class="list-photo"><a href="images/<?php echo $lots[0]["image"] ?>">
                <img src="images/thumbnails/<?php echo $lots[0]["image"] ?>"  alt="" /></a>
        </div>			
        <div class="list-description">
            <h2><?php echo ucwords($lots[0]["name"]); ?></h2>
            <p><?php echo htmlspecialchars($lots[0]["description"]); ?></p>
            <p><strong>Lot:</strong> #1 
                <strong>Price:</strong> <?php echo "$" . number_format($lots[0]["price"], 2); ?></p>
        </div>			
        <div class="clearfloat"></div>
    </li>

    <li class="row<?php echo $counter++ % 2; ?>">
        <div class="list-photo"><a href="images/<?php echo $lots[1]["image"] ?>">
                <img src="images/thumbnails/<?php echo $lots[1]["image"] ?>"  alt="" /></a>
        </div>
        <div class="list-description">
            <h2><?php echo ucwords($lots[1]["name"]); ?></h2>
            <p><?php echo htmlspecialchars($lots[1]["description"]); ?></p>
            <p><strong>Lot:</strong> #2 
                <strong>Price:</strong> <?php echo "$" . number_format($lots[1]["price"], 2); ?></p>
        </div>
        <div class="clearfloat"></div>
    </li>

    <li class="row<?php echo $counter++ % 2; ?>">				
        <div class="list-photo"><a href="images/<?php echo $lots[2]["image"] ?>">
                <img src="images/thumbnails/<?php echo $lots[2]["image"] ?>"  alt="" /></a>
        </div>
        <div class="list-description">
            <h2><?php echo ucwords($lots[2]["name"]); ?></h2>
            <p><?php echo htmlspecialchars($lots[2]["description"]); ?> </p>
            <p><strong>Lot:</strong> #3 
                <strong>Price:</strong> <?php echo "$" . number_format($lots[2]["price"], 2); ?></p>
        </div>
        <div class="clearfloat"></div>
    </li>

</ul>