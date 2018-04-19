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
/*
$query = "DESCRIBE cats";

$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);

$rows = $result->num_rows;

echo "<table><tr><th>Column</th><th>Type</th><th>Null</th><th>Key</th><th>Default</th><th>Extra</th></tr>";

for ($i = 0; $i < $rows; $i++) {
    $result->data_seek($i);
    $row = $result->fetch_array(MYSQLI_NUM);
    echo "<tr>";
    for ($j = 0; $j < 6; $j++) {
        echo "<td>$row[$j]</td>";
    }
    echo "</tr>";
}
echo "</table>";
*/

$query = "DESCRIBE cats";

$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);

?>