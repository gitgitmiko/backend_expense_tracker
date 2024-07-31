<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

include 'db.php';

$sql = "SELECT * FROM expenses";
$result = $conn->query($sql);

$expenses = array();
while($row = $result->fetch_assoc()) {
    $expenses[] = $row;
}

echo json_encode($expenses);

$conn->close();
?>
