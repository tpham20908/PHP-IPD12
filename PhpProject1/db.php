<?php

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error)
    die($conn->connect_error);
$query = "select * from classics";
$result = $conn->query($query);
if (!$result)
    die($conn->error);

$rows = $result->num_rows;
for ($i = 0; $i < $rows; $i++) {
    $result->data_seek($i);
    echo "Author: " . $result->fetch_assoc()["author"] . "<br>";
    $result->data_seek($i);
    echo "Title: " . $result->fetch_assoc()["title"] . "<br>";
    $result->data_seek($i);
    echo "Category: " . $result->fetch_assoc()["category"] . "<br>";
    $result->data_seek($i);
    echo "Year: " . $result->fetch_assoc()["year"] . "<br>";
    $result->data_seek($i);
    echo "ISBN: " . $result->fetch_assoc()["isbn"] . "<br><br>";
}

// Fetching results one row at a time
echo "<strong>Same results with fetching row:</strong><br><br>";
for ($i = 0; $i < $rows; $i++) {
    $result->data_seek($i);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    
    echo "Author: " . $row["author"] . "<br>";
    echo "Title: " . $row["title"] . "<br>";
    echo "Category: " . $row["category"] . "<br>";
    echo "Year: " . $row["year"] . "<br>";
    echo "ISBM: " . $row["isbn"] . "<br><br>";
}
$result->close();
$conn->close();
