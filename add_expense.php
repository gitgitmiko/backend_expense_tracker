// add_expense.php
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");

include 'db.php';

$amount = $_POST['amount'];
$description = $_POST['description'];
$date = $_POST['date'];

$sql = "INSERT INTO expenses (amount, description, date) VALUES ('$amount', '$description', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
