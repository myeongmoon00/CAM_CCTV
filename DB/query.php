<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

include ('conn.php');

$result = array();

$result = $conn -> query("SELECT * FROM member");
while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
    $results[] = $row;
}
header('Content-type : application/json');
echo json_encode($result, JSON_NUMERIC_CHECK);
$conn -> close();
?>