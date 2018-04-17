<?php
/* 
 * bookGegistration.php
 * Tung Pham IPD12 - 2018
 * PHP Assignment1 
 */

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$book = $_POST["book"];
$operating_system = $_POST["os"];

$phone_pattern = "/^\([0-9]{3}\)[0-9]{3}-[0-9]{4}$/";

$invalid_msg = <<<EOD
        Invalid phone number<br>
        A valid phone number must be in the form (555)555-5555<br>
        Click the Back button, enter a valid phone number and resubmit<br><br>
        
        Thank you.<br>
EOD;

$valid_msg = <<<EOD
        Hi $firstName. Thank you for completing the survey.<br>
        You have been added to the $book mailing list.<br>
        <br>
        <strong>The following information has been saved in our database:</strong><br><br>
        <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>OS</td>
                </tr>
            </thead>
        </table>
        
EOD;

if (preg_match($phone_pattern, $phone) != 1)
{
    echo $invalid_msg;
}
else 
{
    echo $valid_msg;
}