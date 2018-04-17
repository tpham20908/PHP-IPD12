<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Book Registration</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
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
        $book = ucwords($_POST["book"]);
        $operating_system = $_POST["os"];

        $phone_pattern = "/^\([0-9]{3}\)[0-9]{3}-[0-9]{4}$/";

        $invalid_msg = <<<EOD
        <span class="red">Invalid phone number</span><br>
        A valid phone number must be in the form <strong>(555)555-5555</strong><br>
        <span class="blue">Click the Back button, enter a valid phone number and resubmit</span><br><br>
        
        <span class="blue">Thank you.</span><br>
EOD;

        $valid_msg = <<<EOD
        Hi <span class="blue">$firstName</span>. Thank you for completing the survey.<br>
        You have been added to the <span class="blue">$book</span> mailing list.<br>
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
            <tbody>
                <tr>
                    <td>$firstName $lastName</td>
                    <td>$email</td>
                    <td>$phone</td>
                    <td>$operating_system</td>
                </tr>
            </tbody>
        </table>
        
EOD;

        if (preg_match($phone_pattern, $phone) != 1) {
            echo $invalid_msg;
        } else {
            echo $valid_msg;
        }
        ?>
    </body>

        