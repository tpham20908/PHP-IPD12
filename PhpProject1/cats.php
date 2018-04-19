<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error)
    die($conn->connect_error);
/*
$query = <<<_END
    CREATE TABLE cats (
        id SMALLINT NOT NULl AUTO_INCREMENT,
        family VARCHAR(32) NOT NULL,
        name VARCHAR(32) NOT NULL,
        age TINYINT NOT NULL,
        PRIMARY KEY (id)
    )
_END;
*/



$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);

?>