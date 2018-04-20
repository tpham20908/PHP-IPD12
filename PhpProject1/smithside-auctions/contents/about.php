<?php
/**
 * about.php
 * 
 * content for the about page
 * 
 * @version 1.2 2018-04-16
 * @package Smithside Auction KD
 * @copyright (c) 2018, Jing Wang
 * @license GNU General Public Source
 * @since release 1.0
 */
?>

<?php
/**
 * create an object called $item from the Contact class
 * pass an associative array with the property names as the keys 
 * and the values from the first contact in the list
 */
$items = array();
$items[] = new Contact(array(
    'first_name' => 'Martha',
    'last_name' => 'Smith',
    'position' => 'HR Manager',
    'email' => 'martha@example.com',
    'phone' => '514-0992-8989'
        ));
$items[] = new Contact(array(
    'first_name' => 'George',
    'last_name' => 'Smith',
    'position' => 'Administrator',
    'email' => 'george@example.com',
    'phone' => '515-555-1236'
        ));
$items[] = new Contact(array(
    'first_name' => 'Jeff',
    'last_name' => 'Meyers',
    'position' => 'hip hop expert for shure',
    'email' => 'jeff@example.com',
    'phone' => '514-4644-4545'
        ));
$items[] = new Contact(array(
    'first_name' => 'Peter',
    'last_name' => 'Meyers',
    'position' => 'CTO',
    'email' => 'peter@example.com',
    'phone' => '515-555-1237'
        ));
$items[] = new Contact(array(
    'first_name' => 'Sally',
    'last_name' => 'Smith',
    'position' => 'CFO',
    'email' => 'sally@example.com',
    'phone' => '515-555-1235'
        ));
$items[] = new Contact(array(
    'first_name' => 'Sarah',
    'last_name' => 'Finder',
    'position' => 'Lost Soul',
    'email' => 'finder@a.com',
    'phone' => '555-123-5555'
        ));

?>



<div class="content">
    <h1>About Us</h1>
    <p>We are all happy to be a part of this. Please contact any of us with questions.</p>

    <ul class="ulfancy">
<?php for ($counter = 0; $counter < count($items); $counter++): ?>
            <li class="row<?php echo ($counter % 2) ?>">
                <h2><?php echo $items[$counter]->contactName() ?></h2>
                <p>Position: <?php echo $items[$counter]->getPosition() ?><br />
                    Email: <?php echo $items[$counter]->getEmail() ?><br />
                    Phone: <?php echo $items[$counter]->getPhone() ?><br /></p>
            </li>
    <?php
endfor;
?>

    </ul>
</div><!-- end content -->

